<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth.basic.once')->group(function() {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/subscribers', [App\Http\Controllers\Subscriber\SubscriberController::class, 'index'])->name('subscribers');
    Route::get('/subscribers/create', [App\Http\Controllers\Subscriber\SubscriberController::class, 'create'])->name('create-subscriber-form');
});
