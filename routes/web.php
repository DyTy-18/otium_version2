<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/servicios', function () {
    return view('services.index');
})->name('services.index');

Route::get('/servicios/outsourcing-contable', function () {
    return view('services.outsourcing');
})->name('services.outsourcing');

Route::get('/servicios/operaciones-financieras', function () {
    return view('services.financial');
})->name('services.financial');

Route::get('/servicios/auditoria-integral', function () {
    return view('services.audit');
})->name('services.audit');

Route::get('/servicios/transformacion-digital', function () {
    return view('services.digital');
})->name('services.digital');

Route::get('/servicios/constitucion-empresas', function () {
    return view('services.legal');
})->name('services.legal');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/contactanos', function () {
    return view('contact');
})->name('contact');
