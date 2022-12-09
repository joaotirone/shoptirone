<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\controlllers\ProductController;
use App\Http\controlllers\CartController;
use App\Http\controlllers\PagSeguroController;


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

Route::get('/boleto/index',[App\Http\Controllers\PagSeguroController::class, 'indexpagboleto'])->name('pag.index');
Route::get('/boleto',[App\Http\Controllers\PagSeguroController::class, 'pagboleto'])->name('pag.boleto');

                                             /*   Route - Carrinho    */
Route::get('/', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');

                                            /*     Route - Sistema    */
Route::get('/auth', [App\Http\Controllers\UserController::class, 'index'])->name('login.user');
Route::get('/home', [App\Http\Controllers\UserController::class, 'home'])->name('home.page');
Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');
                                            /*   Route - Users    */
Route::post('/create', [App\Http\Controllers\UserController::class, 'create'])->name('create');
Route::get('/user/index', [App\Http\Controllers\UserController::class, 'indexuser'])->name('user.index');
Route::any('/user/search', [App\Http\Controllers\UserController::class, 'searchuser'])->name('user.search');
Route::get('/user/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroyuser'])->name('user.destroy');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edituser'])->name('user.edit');
Route::put('/user/update/{id}', [App\Http\Controllers\UserController::class, 'updateuser'])->name('user.update');
                                               /*  Route - Product  */
Route::any('/product/index', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::any('/product/search', [App\Http\Controllers\ProductController::class, 'search'])->name('product.search');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::any('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/product/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');



