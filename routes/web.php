<?php

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
});

