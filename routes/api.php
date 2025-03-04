<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MessageController;


// Route::apiResource('messages', MessageController::class);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/v1/send/sms/{senderid}', [MessageController::class, 'store']);
});