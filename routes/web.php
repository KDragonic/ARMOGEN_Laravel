<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

use App\Http\Middleware\logsMiddleware;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login')->name('home.redirect');





    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {

    Route::get('/user', [UserController::class, 'index'])->name('user.index');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout.index');
    
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});
