<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'products']);
Route::post('/products', [ProductsController::class, 'store']);
Route::put('/products', [ProductsController::class, 'update']);
Route::get('/products/{id}', [ProductsController::class, 'productById']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);