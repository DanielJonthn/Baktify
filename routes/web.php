<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/checkout', function() {
    return view('pages.checkOut');
})->name('checkout');

Route::get('/home', function () {
    return view('pages.homePage');
})->name('home');

Route::get('/aboutus', function () {
    return view('pages.aboutUs');
})->name('aboutus');

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/product/detail/{id}', [ProductController::class, 'showDetail'])->name('productdetail');

// Route::get('/product/add', function () {
//     return view('pages.addProduct');
// })->name('addproduct');

Route::get('product/add', [ProductController::class, 'addProduct'])->name('addproduct');

Route::post('product/add', [ProductController::class, 'insertProduct'])->name('insertproduct');

Route::get('/product/edit/{id}', [ProductController::class, 'editProduct'])->name('editproduct');

Route::post('/product/edit/{id}', [ProductController::class, 'submitProduct'])->name('submitproduct');

Route::get('/product/remove/{id}', [ProductController::class, 'removeProduct'])->name('removeproduct');

Route::get('/addcategory', function () {
    return view('pages.addCategory');
})->name('addcategory');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/editprofile', function () {
    return view('pages.editProfile');
})->name('editprofile');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/cart/check-out');

Route::get('/transaction', function () {
    return view('pages.transaction');
})->name('transaction');