<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

 
use App\http\Controllers\ProductController;
Route::get('/product/index', [ProductController::class , 'index'])->name('products.index');
Route::get('/product/create', [ProductController::class , 'create'])->name('products.create');
Route::get('/product/delete/{id}', [ProductController::class , 'destroy'])->name('products.destroy');
Route::get('/product/edit/{id}', [ProductController::class , 'edit'])->name('products.edit');
Route::post('/product/update/{id}', [ProductController::class , 'update'])->name('products.update');
Route::get('/product/show/{id}', [ProductController::class , 'show'])->name('products.show');
Route::post('/product/store', [ProductController::class , 'store'])->name('products.store');

use App\http\Controllers\CategoryController;
Route::get('/category/index', [CategoryController::class , 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class , 'create'])->name('category.create');
Route::get('/category/delete/{id}', [CategoryController::class , 'destroy'])->name('category.destroy');
Route::get('/category/edit/{id}', [CategoryController::class , 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class , 'update'])->name('category.update');
Route::get('/category/show/{id}', [CategoryController::class , 'show'])->name('category.show');
Route::post('/category/store', [CategoryController::class , 'store'])->name('category.store');
