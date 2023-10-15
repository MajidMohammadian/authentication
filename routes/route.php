<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
| All Route in Authentication package
|
*/

Route::prefix('auth')->namespace('Authentication')->name('auth.')->group(function(){
    Route::get('/', [AuthController::class, 'index'])->name('auth');
    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::prefix('token')->name('token.')->group(function (){
        Route::get('/', [TokenController::class, 'get'])->name('get');
    });
});
