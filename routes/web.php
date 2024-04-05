<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shops', [ShopsController::class, 'index'])->name('shops')->middleware('auth');

Route::controller(UsersController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/handleLogin', 'handleLogin')->name('handleLogin');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/register', 'showRegister')->name('register');
    Route::post('/store', 'store')->name('store');
});

Route::controller(ProductsController::class)->group(function () {
    Route::post('/admin/create',  'store')->name('store-product');
    Route::get('/admin/show-products',  'showListProducts')->name('show-product');
    Route::get('/admin/show-orders',  'showListOrders')->name('show-orders');
    Route::delete('/item/{id}', 'destroy')->name('delete-item');
})->middleware('admin');

Route::controller(OrdersController::class)->group(function () {
    Route::put('/order/{id}', 'update')->name('update-status-order')->middleware('admin');
    Route::get('/show-order', 'index')->name('show-order')->middleware('auth');
});

Route::controller(CartsController::class)->group(function () {
    Route::post('/addcart', 'addToCart')->name('add');
    Route::post('/delete', 'destroy')->name('delete');
    Route::get('/carts', 'index')->name('showCart');
    Route::post('/update-cart', 'updateCart')->name('updateQuantityCart');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
    Route::get('/admin/show', [AdminController::class, 'showView'])->name('show-create')->middleware('admin');
});

Route::controller(CheckoutController::class)->group(function () {
    Route::post('/add-address', 'addAddress')->name('addAddress');
    Route::post('/getAddress', 'getAddress')->name('getAddress');
    Route::post('/createOrderCheckOut', 'createOrderCheckOut')->name('createOrderCheckOut');
    Route::post('/delete-address-session', 'deleteAddressSession')->name('deleteAddressSession');
    Route::get('/checkout', 'index')->name('showCheckout');
    Route::post('/store-address', 'store')->name('storeAddress');
});

Route::post('/process', [AjaxController::class, 'store'])->name('store-add-cart');
Route::post('/shop/store', [ShopsController::class, 'store'])->name('shops.store');
Route::get('/shop/show/{id}', [ShopsController::class, 'showShop'])->name('shops.show');

Route::get('/products', [ProductsController::class, 'index'])->name('product');
Route::get('/searchProduct', [ProductsController::class, 'searchLiveProduct'])->name('searchProduct');
Route::get('/get-products-by-category/{categoryId}', [ProductsController::class, 'show']);
