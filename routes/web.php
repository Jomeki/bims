<?php

use App\Models\Product;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Product routes
Route::get('/products', [App\Http\Controllers\ProductController::class, 'products'])->name('products');
Route::post('/addproducts', [App\Http\Controllers\ProductController::class, 'addproduct'])->name('addproducts');

//Purchase routes
Route::get('/purchase', [App\Http\Controllers\PurchaseController::class, 'purchases'])->name('purchases');
Route::post('/addpurchase', [App\Http\Controllers\PurchaseController::class, 'addpurchase'])->name('addpurchase');

//Order routes
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'orders'])->name('orders');
Route::post('/addorder', [App\Http\Controllers\OrderController::class, 'addorder'])->name('addorder');

//Employee routes
Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'employees'])->name('employees');
Route::post('/addemployee', [App\Http\Controllers\EmployeeController::class, 'addemployee'])->name('addemployee');
