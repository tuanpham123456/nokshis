<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminKeywordController;
use App\Http\Controllers\Admin\AdminProductController;


Route::group(['prefix' => 'api-admin','namespace' => 'Admin'], function() {
    Route::view('/','admin.index');
    // category
    Route::group(['prefix' => 'category'], function(){
        Route::get('', [AdminCategoryController::class, 'index'])->name('admin.category.index');
        Route::get('create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
        Route::post('create',[AdminCategoryController::class, 'store']);

        Route::get('update/{id}',[AdminCategoryController::class, 'edit'])->name('admin.category.update');
        Route::post('update/{id}',[AdminCategoryController::class, 'update']);
        
        Route::get('delete{id}',[AdminCategoryController::class,'delete'])->name('admin.category.delete');

        Route::get('active/{id}',[AdminCategoryController::class, 'active'])->name('admin.category.active');
        Route::get('hot/{id}',[AdminCategoryController::class,'hot'])->name('admin.category.hot');


    });
    // keyword
    Route::group(['prefix' => 'keyword'], function () {
        Route::get('',[AdminKeywordController::class,'index'])->name('admin.keyword.index');
        Route::get('create',[AdminKeywordController::class,'create'])->name('admin.keyword.create');
        Route::post('create',[AdminKeywordController::class,'store']);

        Route::get('update/{id}',[AdminKeywordController::class,'edit'])->name('admin.keyword.update');
        Route::post('update/{id}',[AdminKeywordController::class,'update']);

        Route::get('delete/{id}',[AdminKeywordController::class,'delete'])->name('admin.keyword.delete');
        // ------
        Route::get('hot/{id}',[AdminKeywordController::class,'hot'])->name('admin.keyword.hot');
    });
    // product
    Route::group(['prefix' => 'product'], function () {
        Route::get('',[AdminProductController::class,'index'])->name('admin.product.index');
        Route::get('create',[AdminProductController::class,'create'])->name('admin.product.create');
        Route::post('create',[AdminProductController::class,'store']);

        Route::get('update/{id}',[AdminProductController::class,'edit'])->name('admin.product.update');
        Route::post('update/{id}',[AdminProductController::class,'update']);

        Route::get('delete/{id}',[AdminProductController::class,'delete'])->name('admin.product.delete');

        Route::get('hot/{id}',[AdminProductController::class,'hot'])->name('admin.product.hot');
        Route::get('active/{id}',[AdminProductController::class,'active'])->name('admin.product.active');

    });
});
