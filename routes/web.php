<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoFrontController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\BuzonController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\AdministradorController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// Blog Front
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

// Grupos front
Route::get('/grupos', [GrupoFrontController::class, 'index'])->name('grupos.index');

// Lineas que pertenecen a un grupo front
Route::get('/grupo/{grupo}', [GrupoFrontController::class, 'show'])->name('grupos.show');

//Mostrar productos por grupo y linea front
Route::get('grupo/{group}/linea/{line}', [LineController::class, 'mostrarProductos'])->name('lineas.mostrar');

//Productos front
Route::get('producto/{product}', [LineController::class, 'producto'])->name('producto');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Inicio de sesion con redes
Route::get('auth/facebook', [LoginController::class, 'faceRedirect']);

Route::get('auth/facebook/callback', [LoginController::class, 'signinFacebook']);

Route::get('auth/google', [LoginController::class, 'redirectG']);

Route::get('auth/google/callback', [LoginController::class, 'signinGoogle']);

// Buzon front
Route::resource('buzon', BuzonController::class)->names('buzon');

// Contacto front
Route::resource('contacto', ContactoController::class)->names('contacto');

Route::group(['middleware' => ['auth']], function () {
    //Blog back
    Route::resource('posts', PostController::class)->names('posts');

    // Productos back
    Route::resource('/products', ProductosController::class)->names('products');

    // Grupos bqck
    Route::resource('/groups', GrupoController::class)->names('groups');

    // Lineas back
    Route::resource('/lines', LineController::class)->names('lines');

    // Buzon back
    Route::resource('denuncias', DenunciaController::class)->names('denuncia');

    // Roles back
    Route::resource('roles', RolController::class)->names('roles');

    // Usuarios admin back
    Route::resource('administradores', AdministradorController::class)->names('admin');

});

//Enlace Simbolico
Route::get('/enlace-simbolico', function () {
    Artisan::call('storage:link');
});
