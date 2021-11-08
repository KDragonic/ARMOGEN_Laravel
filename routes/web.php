<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

use App\Http\Middleware\logsMiddleware;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login')->name('home.redirect');



Route::name('login.')->group(function(){ 
    
    Route::get('/login', [LoginController::class, 'index'])->name('index');
    
    Route::post('/login', [LoginController::class, 'store'])->name('store');
    
});

Route::name('register.')->group(function(){ 
    
    Route::get('/register', [RegisterController::class, 'index'])->name('index');
    
    Route::post('/register', [RegisterController::class, 'store'])->name('store');

});

Route::middleware('auth')->group(function () {

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});
