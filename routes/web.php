<?php

use App\Http\Controllers\ProductsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

