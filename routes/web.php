<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/',[HomeController::class, 'index']);
//Route::get('/usuarios', [UserController::class, 'index']);



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index']);
Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index'])-> middleware('auth')->name('usuarios');
Route::get('usuarios/create', [App\Http\Controllers\UserController::class, 'create']);

Route::post('usuarios', [App\Http\Controllers\UserController::class, 'store'])->name('usuarios.store');

Route::get('usuarios/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('usuarios.edit');
Route::put('usuarios/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('usuarios.update');

Route::get('usuarios/{id}/show', [App\Http\Controllers\UserController::class, 'show'])->name('usuarios.show');

Route::put('usuarios/{id}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('usuarios.destroy');
/*
Route::get('/usuarios', function () {
    return view('usuarios');
});
*/
//Proveedores
Route::get('proveedores', [App\Http\Controllers\ProviderController::class, 'index'])-> middleware('auth')->name('proveedores');
Route::get('proveedores/create', [App\Http\Controllers\ProviderController::class, 'create']);
Route::post('proveedores', [App\Http\Controllers\ProviderController::class, 'store'])->name('proveedores.store');
Route::get('proveedores/{id}/edit', [App\Http\Controllers\ProviderController::class, 'edit'])->name('proveedores.edit');
Route::put('proveedores/{id}', [App\Http\Controllers\ProviderController::class, 'update'])->name('proveedores.update');
Route::get('proveedores/{id}/show', [App\Http\Controllers\ProviderController::class, 'show'])->name('proveedores.show');
Route::put('proveedores/{id}/delete', [App\Http\Controllers\ProviderController::class, 'destroy'])->name('proveedores.destroy');

//Sales
Route::get('sales', [App\Http\Controllers\SalesController::class, 'index'])-> middleware('auth')->name('sales');
Route::get('sales/create', [App\Http\Controllers\SalesController::class, 'create']);
Route::post('sales', [App\Http\Controllers\SalesController::class, 'store'])->name('sales.store');
Route::get('sales/{id}/edit', [App\Http\Controllers\SalesController::class, 'edit'])->name('sales.edit');
Route::put('sales/{id}', [App\Http\Controllers\SalesController::class, 'update'])->name('sales.update');
Route::get('sales/{id}/show', [App\Http\Controllers\SalesController::class, 'show'])->name('sales.show');
Route::put('sales/{id}/delete', [App\Http\Controllers\SalesController::class, 'destroy'])->name('sales.destroy');


//Clientes
Route::get('client', [App\Http\Controllers\ClientController::class, 'index'])-> middleware('auth')->name('client');
Route::get('client/create', [App\Http\Controllers\ClientController::class, 'create']);
Route::post('client', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');
Route::get('client/{id}/edit', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');
Route::put('client/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('client.update');
Route::get('client/{id}/show', [App\Http\Controllers\ClientController::class, 'show'])->name('client.show');
Route::put('client/{id}/delete', [App\Http\Controllers\ClientController::class, 'destroy'])->name('client.destroy');

//Productos
Route::get('product', [App\Http\Controllers\ProductController::class, 'index'])-> middleware('auth')->name('product');
Route::get('product/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('product/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('productos.edit');
Route::put('product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::get('product/{id}/show', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::put('product/{id}/delete', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
