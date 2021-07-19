<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/admin/products', [MainController::class, 'product']);
Route::get('/admin/product/info', [MainController::class, 'findProductById']);

Route::get('/admin/categories', [MainController::class, 'category']);
Route::get('/admin/category/info', [MainController::class, 'findCategoryById']);

Route::get('/admin/brands', [MainController::class, 'brand']);
Route::get('/admin/brand/info', [MainController::class, 'findBrandById']);
