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
    $search = request('search');
    $category = request('category');
    $author = request('author');

    if ($search || $category || $author) { 
        $title = 'Blog posts';
        
        if ($category) {
            $title .= " in Category: '$category'";
        }
        
        if ($author) {
            $title .= " by Author: '$author'";
        }

        if ($search) {
            $title .= " with title containing: '$search'";
        }
    }
    else {
        $title = 'All Blog posts';
    }

    return view('blogs', ['title' => $title, 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(12)->withQueryString()]);
});

Route::get('/blogs/{post:slug}', function (Post $post) {    
    return view('blog', ['title' => "Blog Post", 'post' => $post]);
});