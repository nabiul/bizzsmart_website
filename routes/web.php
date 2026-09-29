<?php

use App\Http\Controllers\DemoRequestController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('bizzsmart_website')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::post('/request-demo', [DemoRequestController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('demo.store');
});

Route::prefix('bizzsmart_website/admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('authenticate');

    Route::middleware('bizzsmart.admin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::delete('/requests/{demoRequest}', [AdminController::class, 'destroy'])->name('requests.destroy');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
