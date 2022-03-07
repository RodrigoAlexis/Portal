<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Blog

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/posts/image/{post}',[BlogController::class, 'image'])->name('posts.image');

// Productos

Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Inicio de sesion con redes
Route::get('auth/facebook', [LoginController::class, 'faceRedirect']);

Route::get('auth/facebook/callback', [LoginController::class, 'signinFacebook']);

Route::get('auth/google', [LoginController::class, 'redirectG']);

Route::get('auth/google/callback', [LoginController::class, 'signinGoogle']);

Route::resource('posts', PostController::class)->names('posts');
