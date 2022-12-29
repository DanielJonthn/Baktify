<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionDetailController;

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
    return view('pages.homePage');
})->name('home');

Route::get('/aboutus', function () {
    return view('pages.aboutUs');
})->name('aboutus');

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/product/detail/{id}', [ProductController::class, 'showDetail'])->name('productdetail');

Route::get('product/add', [ProductController::class, 'addProduct'])->name('addproduct');

Route::post('product/add', [ProductController::class, 'insertProduct'])->name('insertproduct');

Route::get('/product/edit/{id}', [ProductController::class, 'editProduct'])->name('editproduct');

Route::post('/product/edit/{id}', [ProductController::class, 'submitProduct'])->name('submitproduct');

Route::get('/product/remove/{id}', [ProductController::class, 'removeProduct'])->name('removeproduct');

Route::get('/addcategory', [CategoryController::class, 'addCategory'])->name('addcategory');

Route::post('/addcategory', [CategoryController::class, 'insertCategory'])->name('insertcategory');

Route::get('/profile', [UserController::class, 'index'])->name('profile');

Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/editprofile', [UserController::class, 'editProfile'])->name('editprofile');

Route::post('/editprofile', [UserController::class, 'submitEdit'])->name('submitedit');

Route::get('/register', [UserController::class,'register'])->name('register');

Route::post('/register', [UserController::class,'submitRegister'])->name('submitregister');

Route::get('/login', [UserController::class,'login'])->name('login');

Route::post('/login',[UserController::class,'submitLogin'])->name('submitLogin');

Route::get('/cart', [ProductController::class, 'showCart'])->name('cart');

Route::get('/transaction', [TransactionDetailController::class, 'getTransaction'])->name('transaction');

Route::get('/addtocard/{id}', [ProductController::class, 'addToCart'])->name('addtocart');

Route::get('/updateCart/{id}', [ProductController::class, 'updateCart'])->name('updatecart');

Route::get('/checkout', [ProductController::class, 'checkOutPage'])->name('checkout');

Route::get('/confirmcheckout/{pass}', [ProductController::class, 'checkout'])->name('confirmcheckout');