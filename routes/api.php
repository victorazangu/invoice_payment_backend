<?php

use App\Http\Controllers\MpesaSTKPUSHController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/api/v1/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/api/v1/mpesatest/stk/push', [MpesaSTKPUSHController::class, 'STKPush']);
    Route::post('/api/v1/confirm', [MpesaSTKPUSHController::class, 'STKConfirm'])->name('mpesa.confirm');
});

