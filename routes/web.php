<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
    // return "<h1>Post Page</h1>";
});

// Route::view('post','/post');

// Route::get('/hellow', function () {
//     return view('post');
// });

Route::get('/post/firstpost', function () {
    return view('firstpost');
});

