<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('products');
});

route::post('/products', [ProductController::class, 'store'])->name('products.store');
