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


Route::get ('/about', function () {
    return view ("about", [
        "name" => "lala",
        "email" => "lala@gmail.com"
    ]);
})-> name('about');

Route::get('/home', function () {
    return view('home');
})-> name('home');

Route::get('layout/main', function () {
    return view('layout.main');
});

Route::get('/posts', [PostController::class, 'index']);