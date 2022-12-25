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
});

Route::get('/aboutus', function () {
    return view('pages.aboutUs');
});

Route::get('/product');

Route::get('/product/detail');

Route::get('/product/add');

Route::get('/product/update');

Route::get('/add-category');

Route::get('/profile');

Route::get('/login');

Route::get('/register');

Route::get('/cart');

Route::get('/cart/check-out');

Route::get('/transaction');