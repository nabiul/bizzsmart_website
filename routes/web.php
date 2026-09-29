<?php

use App\Http\Controllers\DemoRequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductAssistantController;
use Illuminate\Support\Facades\Route;

Route::prefix('bizzsmart_website')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::post('/request-demo', [DemoRequestController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('demo.store');

    Route::post('/ask-product-assistant', [ProductAssistantController::class, 'ask'])
        ->middleware('throttle:12,1')
        ->name('product-assistant.ask');
    Route::post('/start-product-assistant', [ProductAssistantController::class, 'start'])
        ->middleware('throttle:6,1')
        ->name('product-assistant.start');
});

Route::prefix('bizzsmart_website/admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('authenticate');

    Route::middleware('bizzsmart.admin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/assistant-conversations', [AdminController::class, 'assistantConversations'])->name('assistant-conversations');
        Route::delete('/requests/{demoRequest}', [AdminController::class, 'destroy'])->name('requests.destroy');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
