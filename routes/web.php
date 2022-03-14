<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoFrontController;
use App\Http\Controllers\LineController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

// Blog Front
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

// Grupos front
Route::get('/grupos', [GrupoFrontController::class, 'index'])->name('grupos.index');

// Grupos-Lineas front
Route::get('/grupo/{grupo}', [GrupoFrontController::class, 'show'])->name('grupos.show');


// Lineas-products front
// Route::get('/linea/{linea}', [LineFrontController::class, 'show'])->name('lineas.show');
 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Inicio de sesion con redes
Route::get('auth/facebook', [LoginController::class, 'faceRedirect']);

Route::get('auth/facebook/callback', [LoginController::class, 'signinFacebook']);

Route::get('auth/google', [LoginController::class, 'redirectG']);

Route::get('auth/google/callback', [LoginController::class, 'signinGoogle']);

//Blog back
Route::resource('posts', PostController::class)->names('posts');

// Productos
Route::resource('/products', ProductosController::class)->names('products');

// Grupos
Route::resource('/groups', GrupoController::class)->names('groups');

// Lineas
Route::resource('/lines', LineController::class)->names('lines');
