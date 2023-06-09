<?php

use App\Http\Controllers\API\ApiPostCategoryController as APIApiPostCategoryController;
use App\Http\Controllers\API\CarTypeController;
use App\Http\Controllers\ApiPostCategoryController;
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

Route::prefix('/post-category')->group(function(){
    Route::get('/', [APIApiPostCategoryController::class, 'index']);
    Route::post('/', [APIApiPostCategoryController::class, 'store']);
    Route::put('/{id}', [APIApiPostCategoryController::class, 'put']);
});

Route::prefix('/car')->group(function(){
    Route::prefix('/type')->group(function(){
        Route::get('/', [CarTypeController::class, 'index']);
        // Route::post('/', [CarTypeController::class, 'store']);
        // Route::put('/{id}', [CarTypeController::class, 'put']);
    });
});

