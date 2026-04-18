<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;

// ─────────────────────────────────────────
// Rutas públicas
// ─────────────────────────────────────────
Route::get('/', fn () => view('welcome'))->name('home');
Route::get('/servicios', fn () => view('services.index'))->name('services.index');
Route::get('/servicios/outsourcing-contable', fn () => view('services.outsourcing'))->name('services.outsourcing');
Route::get('/servicios/gestion-tributaria', fn () => view('services.gestion-tributaria'))->name('services.gestion-tributaria');
Route::get('/servicios/auditoria', fn () => view('services.audit'))->name('services.audit');
Route::get('/servicios/reportes-power-bi', fn () => view('services.reportes-power-bi'))->name('services.reportes-power-bi');
Route::get('/servicios/sharepoint-documental', fn () => view('services.sharepoint-documental'))->name('services.sharepoint-documental');
Route::get('/servicios/outsourcing-laboral', fn () => view('services.outsourcing-laboral'))->name('services.outsourcing-laboral');
Route::get('/servicios/consultoria', fn () => view('services.consultoria'))->name('services.consultoria');
// Legacy redirects
Route::redirect('/servicios/operaciones-financieras', '/servicios/consultoria', 301);
Route::redirect('/servicios/auditoria-integral', '/servicios/auditoria', 301);
Route::redirect('/servicios/transformacion-digital', '/servicios/reportes-power-bi', 301);
Route::redirect('/servicios/constitucion-empresas', '/servicios/consultoria', 301);
Route::get('/nosotros', fn () => view('about'))->name('about');

// Contacto
Route::get('/contactanos', fn () => view('contact'))->name('contact');
Route::post('/contactanos', [ContactController::class, 'store'])->name('contact.store');

// Blog público
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// ─────────────────────────────────────────
// Autenticación
// ─────────────────────────────────────────
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

// ─────────────────────────────────────────
// Panel Admin (requiere autenticación)
// ─────────────────────────────────────────
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Contactos
    Route::get('/contactos', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('/contactos/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
    Route::patch('/contactos/{contact}/leer', [AdminContactController::class, 'markRead'])->name('contacts.mark-read');
    Route::delete('/contactos/{contact}', [AdminContactController::class, 'destroy'])
        ->name('contacts.destroy')
        ->middleware('role:super_admin,admin');

    // Blog — Posts
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/from-document', [PostController::class, 'fromDocument'])->name('posts.from-document');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::patch('/posts/{post}/publicar', [PostController::class, 'togglePublish'])->name('posts.toggle-publish');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])
        ->name('posts.destroy')
        ->middleware('role:super_admin,admin');

    // Blog — Categorías y Tags (solo admin+)
    Route::resource('categorias', CategoryController::class)
        ->names('categories')
        ->only(['index', 'store', 'update', 'destroy'])
        ->middleware('role:super_admin,admin');

    Route::resource('tags', TagController::class)
        ->only(['index', 'store', 'update', 'destroy'])
        ->middleware('role:super_admin,admin');

    // Usuarios — solo super_admin
    Route::resource('usuarios', UserController::class)
        ->names('users')
        ->middleware('role:super_admin');

    // Perfil propio
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/perfil', [ProfileController::class, 'update'])->name('profile.update');
});
