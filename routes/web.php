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

Route::get('/about', function () {
    return '2241720238 <br>Jantra Lang Lang Buana';
});


Route::get('/user/{name}', function ($jantra) {
    return 'Nama saya ' . $jantra;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID {{$id}}";
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get(
    '/hello',
    [WelcomeController::class, 'hello']
);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Andi']);
});

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Andi']);
});
