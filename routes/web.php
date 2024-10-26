<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ProfileController, CategoryController, FrontendController, VendorController, ProductController,WishlistController};
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/product/details/{slug}', [FrontendController::class, 'productdetails'])->name('productdetails');
Route::get('/category/{category_id}', [FrontendController::class, 'categorywiseproducts'])->name('categorywiseproducts');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/email/offer', [HomeController::class, 'emailoffer'])->name('emailoffer');
Route::get('single/email/offer/{id}', [HomeController::class, 'singleemailoffer'])->name('singleemailoffer');
Route::post('check/email/offer', [HomeController::class, 'checkemailoffer'])->name('checkemailoffer');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/name/change', [ProfileController::class, 'namechange'])->name('profile.namechange');
Route::post('/profile/password/change', [ProfileController::class, 'passwordchange'])->name('profile.passwordchange');
Route::post('/profile/photo/change', [ProfileController::class, 'photochange'])->name('profile.photochange');

Route::resource('category', CategoryController::class);
Route::resource('vendor', VendorController::class);
Route::resource('product', ProductController::class);
Route::resource('wishlist', WishlistController::class);
Route::get('/wishlist/insert/{product_id}', [WishlistController::class, 'insert'])->name('wishlist.insert');
Route::get('/wishlist/remove/{wishlist_id}', [WishlistController::class, 'remove'])->name('wishlist.remove');
