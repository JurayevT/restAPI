<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\OptionController;
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
// Route::resource('products', ProductController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("options", [OptionController::class, 'index']);
Route::get("options/{id}", [OptionController::class, 'show']);

Route::get("comments", [CommentController::class, 'index']);
Route::get("comments/{id}", [CommentController::class, 'show']);

Route::get("links", [LinkController::class, 'index']);
Route::get("links/{id}", [LinkController::class, 'show']);