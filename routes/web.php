<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;

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

Route::get('/', [BaseController::class, 'index']) -> name('home');
Route::get('/about', [BaseController::class, 'about']) -> name('about');
Route::get('/delivery', [BaseController::class, 'delivery']) -> name('delivery');
Route::get('/pay', [BaseController::class, 'pay']) -> name('pay');
Route::get('/exclusive', [BaseController::class, 'exclusive']) -> name('exclusive');
Route::get('/contact', [BaseController::class, 'contact']) -> name('contact');
Route::get('/catalog', [BaseController::class, 'catalog']) -> name('catalog');
Route::get('/cart', [BaseController::class, 'cart']) -> name('cart');
Route::get('/checkout', [BaseController::class, 'checkout']) -> name('checkout');
Route::get('/thanks', [BaseController::class, 'thanks']) -> name('thanks');
Route::get('/catalog/{shopProduct:slug}', [BaseController::class, 'product']) -> name('product');

Route::view('/admin', 'layouts.index');
Route::view('/admin/{any}', 'layouts.index')->where('any', '.*');