<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\siteController;
use App\Http\Middleware;


Route::get('/',[siteController::class,'index'])->name('base_url');
Route::get('/post',[siteController::class,'singlePost'])->name('single_post');

Route::prefix('users')->name('user.')->group(
   function(){
    Route::get('/register-form',[siteController::class,'userregistration'])->name('registerform');
    Route::post('/register',[siteController::class,'requestforregistration'])->name('register');
    Route::get('/login',[siteController::class,'loginform'])->name('login');
    Route::post('/login',[siteController::class,'login'])->name('login');
    Route::get('/logout',[siteController::class,'logout'])->name('logout');
   }
);
