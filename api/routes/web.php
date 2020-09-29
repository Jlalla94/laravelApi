<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/',  [LoginController::class, 'login'])->name('login');
Route::post('/auth',  [LoginController::class, 'authenticate'])->name('authenticate');
Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/delete/{id}', [ProductController::class, 'save'])->name('product.delete');
    Route::post('/product/save/{id}', [ProductController::class, 'save'])->name('product.save');
    Route::post('/product/update/{id}', [ProductController::class, 'save'])->name('product.update');
    Route::post('/product', [ProductController::class, 'save'])->name('product.save');
});

