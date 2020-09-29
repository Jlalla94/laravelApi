<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
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

Route::post('/priceForm',  [FormController::class, 'priceForm']);

Route::post('/faqForm',  [FormController::class, 'faqForm']);

Route::post('/sendCommercialPrice',  [FormController::class, 'sendCommercialPrice']);

Route::post('/productList',  [ProductController::class, 'list']);

Route::post('/product/{slug}',  [ProductController::class, 'one']);

