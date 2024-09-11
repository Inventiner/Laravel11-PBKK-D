<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Laravel Project - Framework Programming D']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me']);
});