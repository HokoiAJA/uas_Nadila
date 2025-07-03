<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


Route::get('/', [OrderController::class, 'index']);

Route::resource('products', OrderController::class);
Route::resource('orders', OrderController::class);
