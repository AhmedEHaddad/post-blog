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

Route::get('/post', function () {
    return view('post',[
        'post' => file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html')
        ]); 
});

Route::get('/posts', function () {
    
    return view('posts'); 
});