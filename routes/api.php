<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClothingItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::prefix('items')->group(function () {
        Route::get('/', [ClothingItemController::class, 'index']);
        Route::post('/', [ClothingItemController::class, 'store']);
        Route::get('/{item}', [ClothingItemController::class, 'show']);
        Route::put('/{item}', [ClothingItemController::class, 'update']);
        Route::delete('/{item}', [ClothingItemController::class, 'destroy']);
    });

    Route::post('/logout', function (Request $request) {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    });
});
