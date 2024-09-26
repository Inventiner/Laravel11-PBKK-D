<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome', ['title' => 'Laravel Project - Framework Programming D']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me']);
});

Route::get('/blogs', function () {
    return view('blogs', ['title' => 'My Blogs', 'posts' => Post::All()]);
});

Route::get('/blogs/{post:slug}', function (Post $post) {    
    return view('blog', ['title' => $post['title'], 'post' => $post]);
});