<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalContacts'    => Contact::count(),
            'unreadContacts'   => Contact::whereNull('read_at')->count(),
            'totalUsers'       => User::count(),
            'totalPosts'       => Post::count(),
            'publishedPosts'   => Post::published()->count(),
            'recentContacts'   => Contact::latest()->take(5)->get(),
        ]);
    }
}
