<?php

use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\MealsController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PromoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function (){
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');

    Route::prefix('profile')->group(function (){
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('info', [ProfileController::class, 'info'])->name('profile.info');
        Route::patch('info/{profile}', [ProfileController::class, 'infoUpdate'])->name('profile.info.update');
        Route::get('schedule', [ProfileController::class, 'schedule'])->name('profile.schedule');
        Route::get('social', [ProfileController::class, 'social'])->name('profile.social');
    });

    Route::prefix('menu')->group(function (){
        Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
        Route::post('categories', [CategoryController::class, 'store'])->name('category.store');
        Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');

        Route::post('category/sortable', [CategoryController::class, 'sortable'])->name('category.sortable');
        Route::post('category/setstatus', [CategoryController::class, 'setStatus'])->name('category.setStatus');
        Route::post('category/delete', [CategoryController::class, 'delete'])->name('category.delete');

    });

    Route::prefix('menu')->group(function (){
        Route::get('products', [ProductController::class, 'index'])->name('product.index');
        Route::post('products', [ProductController::class, 'store'])->name('product.store');
        Route::get('products/{product}/edit', [CategoryController::class, 'edit'])->name('product.edit');

        Route::post('product/sortable', [ProductController::class, 'sortable'])->name('product.sortable');
        Route::post('product/setstatus', [ProductController::class, 'setStatus'])->name('product.setStatus');
        Route::post('product/delete', [ProductController::class, 'delete'])->name('product.delete');

    });

    Route::prefix('promo')->group(function (){
        Route::get('discount', [PromoController::class, 'index'])->name('promo.index');
        Route::get('share', [PromoController::class, 'share'])->name('promo.share');
    });
});




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
