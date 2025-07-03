<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomTableController;


Route::get('/', [CustomTableController::class, 'index']);

Route::resource('custom_table', CustomTableController::class);
Route::resource('orders', CustomTableController::class);
