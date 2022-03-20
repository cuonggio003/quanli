<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
    return view('home');
});

Route::prefix('/product')->group( function(){
    Route::get('/', [ProductController::class, 'showProduct'])->name('show.product');
    Route::get('/create', [ProductController::class, 'createProduct'])->name('create.product');
    Route::post('/create', [ProductController::class, 'store'])->name('store.product');
    Route::get('/{id}update', [ProductController::class, 'updateProduct'])->name('update.product');
    Route::post('/{id}update', [ProductController::class, 'editProduct'])->name('edit.product');
    Route::get('/{id}/delete', [ProductController::class, 'deleteProduct'])->name('delete.product');
});

Route::prefix('/category')->group(function(){
    Route::get('/', [CategoryController::class, 'showCategory'])->name('show.category');
    Route::get('/create', [CategoryController::class, 'createCategory'])->name('create.category');
    Route::post('/create', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/{id}update', [CategoryController::class, 'updateCategory'])->name('update.category');
    Route::post('/{id}update', [CategoryController::class, 'editCategory'])->name('edit.category');
    Route::get('/{id}/delete', [CategoryController::class, 'deleteCategory'])->name('delete.category');

});
