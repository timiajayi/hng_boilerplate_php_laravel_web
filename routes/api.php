<?php

use App\Http\Controllers\Api\V1\JobController;
use App\Http\Controllers\Api\V1\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    Route::get('/', function () {
        return 'api scaffold';
    });

    Route::apiResource('/users', UserController::class);
});


Route::middleware('auth:api')->group(function () {
    Route::apiResource('jobs', JobController::class);
});
