<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UserCotroller;
use App\Http\Controllers\Api\Subscriber\SubscriberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth.basic.once')->group(function() {
    Route::post('/user/mailerlite-api-key', [UserCotroller::class, 'saveMailerliteKey'])->name('save-mailerlite-api-key');

    Route::prefix('subscribers')->group(function() {
        Route::get('/', [SubscriberController::class, 'getDatatable'])->name('subscriber-datatable');
        Route::post('/', [SubscriberController::class, 'create'])->name('create-subscriber');
        Route::put('/{subscriber}', [SubscriberController::class, 'update'])->name('update-subscriber');
        Route::delete('/{subscriber}', [SubscriberController::class, 'delete'])->name('delete-subscriber');
    });
});
