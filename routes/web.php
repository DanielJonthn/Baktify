<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.homePage');
})->name('home');

Route::get('/aboutus', function () {
    return view('pages.aboutUs');
})->name('aboutus');

Route::get('/product', function () {
    return view('pages.productPage');
})->name('product');

Route::get('/product/detail', function () {
    return view('pages.productDetail');
})->name('productdetail');

Route::get('/product/add', function () {
    return view('pages.addProduct');
})->name('addproduct');

Route::get('/product/edit', function () {
    return view('pages.editProduct');
})->name('editproduct');

Route::get('/add-category');

Route::get('/profile');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/cart');

Route::get('/cart/check-out');

Route::get('/transaction');