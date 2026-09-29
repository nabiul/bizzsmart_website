<?php

use App\Http\Controllers\DemoRequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductAssistantController;
use Illuminate\Support\Facades\Route;

$appPath = trim((string) (parse_url((string) config('app.url'), PHP_URL_PATH) ?: ''), '/');

// Keep local sub-folder URLs working while allowing the same app to run at a
// live domain root. For example, APP_URL=http://localhost/bizzsmart_website
// uses the local prefix, while APP_URL=https://bizzsmart.xyz uses no prefix.
Route::prefix($appPath)->group(function () {
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
//add a clear cache route for testing purposes
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cache cleared!";
});

Route::prefix(($appPath ? $appPath.'/' : '').'admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('authenticate');

    Route::middleware('bizzsmart.admin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/assistant-conversations', [AdminController::class, 'assistantConversations'])->name('assistant-conversations');
        Route::delete('/requests/{demoRequest}', [AdminController::class, 'destroy'])->name('requests.destroy');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
