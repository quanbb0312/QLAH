<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('product-list', [ProductController::class, 'index']);
Route::get('product-add', [ProductController::class, 'add']);
Route::post('product-save', [ProductController::class, 'save']);
Route::get('product-delete/{id}', [ProductController::class, 'delete']);
Route::get('product-edit/{id}', [ProductController::class, 'edit']);
Route::post('product-update', [ProductController::class, 'update']);

// admin dashboard
Route::get('admin/index', [AdminController::class, 'dashboard']);
Route::get('admin/product-list', [AdminController::class, 'list']);
Route::get('admin/product-add', [AdminController::class, 'add']);