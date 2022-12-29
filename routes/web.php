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

Route::get('product/add', [ProductController::class, 'addProduct'])->name('addproduct')->middleware('guestMiddleware','adminMiddleware');

Route::post('product/add', [ProductController::class, 'insertProduct'])->name('insertproduct')->middleware('guestMiddleware','adminMiddleware');

Route::get('/product/edit/{id}', [ProductController::class, 'editProduct'])->name('editproduct')->middleware('guestMiddleware','adminMiddleware');

Route::post('/product/edit/{id}', [ProductController::class, 'submitProduct'])->name('submitproduct')->middleware('guestMiddleware','adminMiddleware');

Route::get('/product/remove/{id}', [ProductController::class, 'removeProduct'])->name('removeproduct')->middleware('guestMiddleware','adminMiddleware');

Route::get('/addcategory', [CategoryController::class, 'addCategory'])->name('addcategory')->middleware('guestMiddleware','adminMiddleware');

Route::post('/addcategory', [CategoryController::class, 'insertCategory'])->name('insertcategory')->middleware('guestMiddleware','adminMiddleware');

Route::get('/profile', [UserController::class, 'index'])->name('profile')->middleware('guestMiddleware');

Route::get('/logout',[UserController::class,'logout'])->name('logout')->middleware('guestMiddleware');

Route::get('/editprofile', [UserController::class, 'editProfile'])->name('editprofile')->middleware('guestMiddleware');

Route::post('/editprofile', [UserController::class, 'submitEdit'])->name('submitedit')->middleware('guestMiddleware');

Route::get('/register', [UserController::class,'register'])->name('register')->middleware('onlyGuestMiddleware');

Route::post('/register', [UserController::class,'submitRegister'])->name('submitregister')->middleware('onlyGuestMiddleware');

Route::get('/login', [UserController::class,'login'])->name('login')->middleware('onlyGuestMiddleware');

Route::post('/login',[UserController::class,'submitLogin'])->name('submitLogin')->middleware('onlyGuestMiddleware');

Route::get('/cart', [ProductController::class, 'showCart'])->name('cart')->middleware('guestMiddleware','memberMiddleware');

Route::get('/transaction', [TransactionDetailController::class, 'getTransaction'])->name('transaction')->middleware('guestMiddleware','memberMiddleware');

Route::get('/addtocart/{id}', [ProductController::class, 'addToCart'])->name('addtocart')->middleware('authenticatedMiddleware','memberMiddleware');

Route::get('/updateCart/{id}', [ProductController::class, 'updateCart'])->name('updatecart')->middleware('guestMiddleware','memberMiddleware');

Route::get('/checkout', [ProductController::class, 'checkOutPage'])->name('checkout')->middleware('guestMiddleware','memberMiddleware');

Route::get('/confirmcheckout/{pass}', [ProductController::class, 'checkout'])->name('confirmcheckout')->middleware('guestMiddleware','memberMiddleware');