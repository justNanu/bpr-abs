<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/products', [IndexController::class, 'products']);
Route::get('/simulasi', [IndexController::class, 'simulasi']);
Route::get('/about_us', [IndexController::class, 'aboutUs']);
Route::get('/products/{product:slug}', [IndexController::class, 'product']);
