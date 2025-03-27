<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::inertia('/','Index');
Route::inertia('/faq','Faq/Index');
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/products/{category}', [ProductController::class, 'show']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create',[ProductController::class, 'create']);
