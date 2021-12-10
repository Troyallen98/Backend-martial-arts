<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TechniqueController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PositionTechniqueController;
use App\Http\Controllers\CommentController;


Route::prefix('v1')->group(function () {
    Route::get('/test', [UserController::class, 'index']);
    Route::get('/positions', [PositionController::class, 'index']);
    Route::post('/register', [UserController::class, 'register']);
    Route::get('/view-technique', [TechniqueController::class, 'index']);
    Route::get('/view-positions-technique', [PositionTechniqueController::class, 'index']);
    Route::get('/view-positions-technique-comment', [CommentController::class, 'index']);
    //edit or delete comment maybe?

    // need token to access these routes
    Route::middleware('auth:api')->group(function () {
        Route::get('/logout', [UserController::class, 'logout']);
        Route::apiResource('/technique', TechniqueController::class);
        Route::post('/technique', [TechniqueController::class, 'store']);
        Route::post('/upload-positions-technique-comment', [CommentController::class, 'store']);
        Route::get('/user', [UserController::class, 'viewProfile']);
    });
});

// Route::middleware('auth:api')->get('/user', function(Request $request) {
//     return $request->user();
// });

Route::get('/nofunction', function () {
    return 'test test';
});
