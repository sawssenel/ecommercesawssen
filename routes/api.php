<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScategorieController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ArticleController;
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
Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
    });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
  
    Route::middleware('api')->group(function () {
        Route::resource('scategories', ScategorieController::class);
        });
        Route::get('/scat/{idcat}',
        [ScategorieController::class,'showSCategorieByCAT']);
        
        Route::middleware('api')->group(function () {
            Route::resource('articles', ArticleController::class);
            });