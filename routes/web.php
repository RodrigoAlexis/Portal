<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoFrontController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\BuzonController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

// Blog Front
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

// Grupos front
Route::get('/grupos', [GrupoFrontController::class, 'index'])->name('grupos.index');

// Lineas que pertenecen a un grupo
Route::get('/grupo/{grupo}', [GrupoFrontController::class, 'show'])->name('grupos.show');

//Mostrar productos por grupo y linea
Route::get('grupo/{group}/linea/{line}', [LineController::class, 'mostrarProductos'])->name('lineas.mostrar');

// Route::get('grupo/{group}/linea/{line}/producto/{product}', [ProductosController::class, 'mostrar'])->name('productos.mostrar');
 

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

// Buzon
Route::resource('buzon', BuzonController::class)->names('buzon');
