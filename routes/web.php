<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;

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

Route::resource('users', UserController::class);

Route::group(["middleware" => "roles:admin,cliente"], function () {
    Route::get('/', [ProductoController::class, 'index'])
        ->name('inicio');

    Route::resource('productos', ProductoController::class)
        ->only(['index', 'show']);
});

Route::get('login', [LoginController::class, 'loginForm'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('carrito', CarritoController::class)->middleware('auth');

Route::get('carrito.pedidoConfirmado/{id}', [CarritoController::class, 'pedidoConfirmado'])->middleware('auth')->name('pedidoConfirmado');
