<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DoshboadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('admin/auth/login');
});
// Route::resource('product', ProductController::class);


// admin dashboard
Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('adminLogin');
    Route::post('login', [LoginController::class, 'login'])->name('adminLoginProcess');
    Route::get('logout', [LoginController::class, 'logout'])->name('adminLogout');
    Route::get('register', [LoginController::class, 'showRegistrationForm'])->name('adminRegister');
    Route::post('register', [LoginController::class, 'register'])->name('adminRegisterProcess');
    Route::get('confirm-email', [LoginController::class, 'showViewEmail'])->name('confirm-email');
    Route::post('send-email', [LoginController::class, 'sendMail'])->name('send-email');
    Route::get('change-password', [LoginController::class, 'showViewChangePassword'])->name('show-change-password');
    Route::post('change-password', [LoginController::class, 'changePassword'])->name('change-password');
});

// admin Product
Route::prefix('admin')->middleware(['isLoggedIn'])->group(function () {
    Route::get('index', [DoshboadController::class, 'index'])->name('admin.index');

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
        Route::post('update', [OrderController::class, 'update'])->name('order-update');
    });

    //admin Customer
    Route::prefix('customer')->group(function () {
        Route::get('list', [CustomerController::class, 'list'])->name('customer-list');
        Route::get('add', [CustomerController::class, 'add'])->name('customer-add');
        Route::post('save', [CustomerController::class, 'save'])->name('customer-save');
        Route::delete('delete/{id}', [CustomerController::class, 'delete'])->name('customer-delete');
        Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer-edit');
        Route::post('update', [CustomerController::class, 'update'])->name('customer-update');
    });
});

//admin Category
// Route::get('admin/category-list', [CategoryController::class, 'list'])->middleware('isLoggedIn');
// Route::get('admin/category-add', [CategoryController::class, 'add'])->middleware('isLoggedIn');
// Route::post('admin/categories/save', [CategoryController::class, 'save'])->name('category.save');
// Route::delete('admin/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');
// Route::get('admin/category-edit/{id}', [CategoryController::class, 'edit']);
//admin Order
// Route::get('admin/order-add', [OrderController::class, 'add'])->middleware('isLoggedIn');
// Route::post('admin/orders/save', [OrderController::class, 'save'])->name('order.save');
// Route::get('admin/order-edit/{id}', [OrderController::class, 'edit'])->middleware('isLoggedIn');
// Route::put('admin/order-update/{id}', [OrderController::class, 'update'])->name('order.update');
// Route::delete('admin/order-delete/{id}', [OrderController::class, 'delete'])->name('order.delete');
// Route::get('admin/order-list', [OrderController::class, 'list'])->middleware('isLoggedIn')->name('admin.order-list');
//admin Customer
// routes/web.php
// Route::get('admin/customer-add', [CustomerController::class, 'add'])->middleware('isLoggedIn')->name('admin.customer-add');
// Route::post('admin/customers/save', [CustomerController::class, 'save'])->name('customer.save');
// Route::get('admin/customer-edit/{id}', [CustomerController::class, 'edit'])->middleware('isLoggedIn')->name('admin.customer-edit');
// Route::delete('admin/customer-delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
// Route::get('admin/customer-list', [CustomerController::class, 'list'])->middleware('isLoggedIn')->name('admin.customer-list');
// Route::post('admin/customer-update/{id}', [CustomerController::class, 'update'])->name('customer.update');
// Route::put('admin/customer-update/{id}', [CustomerController::class, 'update']);
