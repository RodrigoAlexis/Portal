<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Inicio de sesion con redes
Route::get('auth/facebook', [LoginController::class, 'faceRedirect']);

Route::get('auth/facebook/callback', [LoginController::class, 'signinFacebook']);

Route::get('auth/google', [LoginController::class, 'redirectG']);

Route::get('auth/google/callback', [LoginController::class, 'signinGoogle']);