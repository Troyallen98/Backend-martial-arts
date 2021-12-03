<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;

Route::get('/test',[UserController::class, 'index']);
Route::post('/register',[UserController::class, 'register']);


Route::middleware('auth:api')->prefix('v1')->group(function() {

    Route::get('/logout',[UserController::class, 'logout']);
    Route::post('/video', [VideoController::class, 'store']);

    Route::get('/user', function(Request $request){
        return $request->user();

    });
});

// Route::middleware('auth:api')->get('/user', function(Request $request) {
//     return $request->user();
// });

Route::get('/nofunction', function () {
    return 'test test';
});
