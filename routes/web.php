<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;



Route::prefix('/')->group(function(){
    Route::get('/',[MainController::class,'index'])->name('home');
});
Route::prefix('/authenticate')->group(function(){
    Route::get('/register',[LoginController::class,'register'])->name('register');
    Route::post('/register',[LoginController::class,'authenticate'])->name('storeRegister');
    Route::get('/login',[LoginController::class,'login'])->name('login');
    Route::post('/login',[LoginController::class,'storeLogin'])->name('storeLogin');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});
Route::prefix('user')->group(function(){
    Route::get('/listUser',[UserController::class,'listUser'])->name('listUser');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('editUser');
    Route::put('/update/{id}',[UserController::class,'update'])->name('updateUser');
    Route::delete('/delete/{id}',[UserController::class,'delete'])->name('deleteUser');
});
Route::prefix('/category')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});
Route::prefix('/products')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});

