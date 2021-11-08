<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\logsMiddleware;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login')->name('home.redirect');



// Route::name('user.')->group(function(){ 
    
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
// });


Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
    
    Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
});
