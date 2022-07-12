<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('/signup', [AuthenticationController::class, 'createAccount']);
    Route::post('/signin', [AuthenticationController::class, 'signin']);
    // Route::post('/reset-password', [ResetPasswordController::class, 'reset']);
    // Route::post('/forgot-password', [ResetPasswordController::class, 'forgot']);
    // Route::get('/sign-out', [AuthenticationController::class, 'logout'])->middleware('auth:sanctum');
});