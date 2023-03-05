<?php

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [\App\Http\Controllers\Auth\LoginController::class, 'me']);

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

        Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index']);

        Route::resource('/role', 'RoleController');

        Route::resource('/Client', 'ClientController');

    });


});

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('register', [\App\Http\Controllers\Auth\LoginController::class, 'register']);


