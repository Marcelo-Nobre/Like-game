<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('content.home');
});

Route::get('/blog-grid', function () {
    return view('content.blog-grid');
});

Route::get('/blog-single', function () {
    return view('content.blog-single');
});

Route::get('/sing-in', function () {
    return view('content.sing-in');
});

Route::get('/sing-up', function () {
    return view('content.sing-up');
});
