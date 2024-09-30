<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome', ['title' => 'Laravel Project - Framework Programming D']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me']);
});

Route::get('/blogs', function () {
    return view('blogs', ['title' => 'Blogs Page', 'posts' => Post::All()]);
});

Route::get('/blogs/{post:slug}', function (Post $post) {    
    return view('blog', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {    
    return view('filteredblogs', ['title' => count($user->posts) . ' Blogs By: ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {    
    return view('filteredblogs', ['title' => count($category->posts) . ' Blogs in category: ' . $category->name, 'posts' => $category->posts]);
});