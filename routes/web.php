<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/1', function () {
    return view('index');
});
Route::prefix('/register')->group(function(){
    Route::get('/authenticate',[LoginController::class,'register'])->name('authenticate');
});
