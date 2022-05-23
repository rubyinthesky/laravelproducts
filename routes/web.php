<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::get('products/product/{id}', [App\Http\Controllers\ProductController::class, 'getProduct'])->name('product');
Route::get('products/saveProduct', [App\Http\Controllers\ProductController::class, 'saveProduct']);
Route::post('products/product', [App\Http\Controllers\ProductController::class, 'postProduct']);
Route::get('/products/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct']);
Route::get('/products/updateProduct/{id}', [App\Http\Controllers\ProductController::class,'updateProductId']);
Route::post('/products/updateProduct/{id}', [App\Http\Controllers\ProductController::class,'updateProduct']);


Route::get('products/product/variation/{id}', [App\Http\Controllers\ProductController::class, 'getVariation']);
Route::get('products/saveVariation/{id}', [App\Http\Controllers\ProductController::class, 'saveVariation'])->name('saveVariation');
Route::post('products/product/variation', [App\Http\Controllers\ProductController::class, 'postVariation']);
Route::get('/products/deleteVariation/{id}', [App\Http\Controllers\ProductController::class, 'deleteVariation']);
Route::get('/products/updateVariation/{id}', [App\Http\Controllers\ProductController::class,'updateVariationId']);
Route::post('/products/updateVariation/{id}', [App\Http\Controllers\ProductController::class,'updateVariation']);