<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
   
});

Route::get('/hello', function () {
    // return "Welocme! There";
    return view('hello'); 
});

Route::get('/posts/{post}', function ($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    $post = file_get_contents($path);

    return view('post',[
        'post' => $post
        ]); 
});

Route::get('/posts', function () {
    
    return view('posts'); 
});