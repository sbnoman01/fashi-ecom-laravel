<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'showHome']);
Route::get('/shop', [SiteController::class, 'showshop']);
Route::get('/cart', [SiteController::class, 'showCart']);
Route::get('/checkout', [SiteController::class, 'showCheckout']);
Route::get('/login', [SiteController::class, 'showLogin']);
Route::get('/register', [SiteController::class, 'showRegister']);
Route::get('/blog', [SiteController::class, 'showBlog']);
Route::get('/blog-details', [SiteController::class, 'showBlogDetails']);
Route::get('/contact', [SiteController::class, 'showContact']);
Route::get('/faq', [SiteController::class, 'showFAQ']);
