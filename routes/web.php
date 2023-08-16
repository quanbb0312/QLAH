<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;


Route::get('/', function () {
    return view('admin/auth/login');
});

// admin dashboard
Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('adminLogin');
    Route::post('login', [AuthController::class, 'login'])->name('adminLoginProcess');
    Route::get('logout', [AuthController::class, 'logout'])->name('adminLogout');
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('adminRegister');
    Route::post('register', [AuthController::class, 'register'])->name('adminRegisterProcess');
    Route::get('confirm-email', [AuthController::class, 'showViewEmail'])->name('confirm-email');
    Route::post('send-email', [AuthController::class, 'sendMail'])->name('send-email');
    Route::get('change-password', [AuthController::class, 'showViewChangePassword'])->name('show-change-password');
    Route::post('change-password', [AuthController::class, 'changePassword'])->name('change-password');
});

// admin Product
Route::prefix('admin')->middleware(['isLoggedIn'])->group(function () {
    Route::get('index', [DashboadController::class, 'index'])->name('admin.index');

    //product
    Route::prefix('product')->group(function () {
        Route::get('list', [ProductController::class, 'index'])->name('product-list');
        Route::get('add', [ProductController::class, 'add'])->name('product-add');
        Route::post('save', [ProductController::class, 'save'])->name('product-save');
        Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('product-delete');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product-edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('product-update');
    });

    //admin Category
    Route::prefix('category')->group(function () {
        Route::get('list', [CategoryController::class, 'list'])->name('category-list');
        Route::get('add', [CategoryController::class, 'add'])->name('category-add');
        Route::post('save', [CategoryController::class, 'save'])->name('category-save');
        Route::delete('delete/{id}', [CategoryController::class, 'delete'])->name('category-delete');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
        Route::put('update/{id}', [CategoryController::class, 'update'])->name('category-update');
    });

    //admin Order
    Route::prefix('order')->group(function () {
        Route::get('list', [OrderController::class, 'list'])->name('order-list');
        Route::get('add', [OrderController::class, 'add'])->name('order-add');
        Route::post('save', [OrderController::class, 'save'])->name('order-save');
        Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('order-delete');
        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('order-edit');
        Route::get('show-detail/{id}', [OrderController::class, 'show'])->name('order-show-detail');
        Route::put('update/{id}', [OrderController::class, 'update'])->name('order-update');
    });

    //admin Customer
    Route::prefix('customer')->group(function () {
        Route::get('list', [CustomerController::class, 'list'])->name('customer-list');
        Route::get('add', [CustomerController::class, 'add'])->name('customer-add');
        Route::post('save', [CustomerController::class, 'save'])->name('customer-save');
        Route::delete('delete/{id}', [CustomerController::class, 'delete'])->name('customer-delete');
        Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer-edit');
        Route::put('update/{id}', [CustomerController::class, 'update'])->name('customer-update');
    });
});

Route::prefix('shop')->group(function () {

});

