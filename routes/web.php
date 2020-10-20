<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ProductDetailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('',[HomeController::class,'index'])->name('get.home');
    Route::get('san-pham',[ProductController::class,'index'])->name('get.product.list');
    Route::get('san-pham/{slug}',[ProductDetailController::class,'getProductDetail'])->name('get.product.detail');

});

include('route_admin.php');