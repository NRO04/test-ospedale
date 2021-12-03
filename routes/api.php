<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Roles\RolesController;
use App\Http\Controllers\Eps\EpsController;

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

Route::group(['prefix' => 'eps', 'as' => 'eps'], function () {
    Route::get('/', [EpsController::class, 'index']);
});


Route::group(['prefix' => 'users', 'as' => 'users'], function () {
    Route::get('/', [UserController::class, 'index']);
});


Route::group(['prefix' => 'roles', 'as' => 'roles'], function () {
    Route::get('/', [RolesController::class, 'index']);
});
