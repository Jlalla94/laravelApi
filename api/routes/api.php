<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
