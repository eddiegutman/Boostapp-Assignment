<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Redirect::to('/products');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/favorites', [ProductController::class, 'favorites']);

Route::put('/products/{product}', [ProductController::class, 'update']);

Route::post('/cart/{product}', [CartController::class, 'store']);

Route::delete('/cart/{cart}', [CartController::class, 'destroy']);
