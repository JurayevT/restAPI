<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostmetaController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\TermTaxonomyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsermetaController;
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

Route::get("postmetas", [PostmetaController::class, 'index']);
Route::get("postmetas/{id}", [PostmetaController::class, 'show']);

Route::get("posts", [PostController::class, 'index']);
Route::get("posts/{id}", [PostController::class, 'show']);

Route::get("terms", [TermController::class, 'index']);
Route::get("terms/{id}", [TermController::class, 'show']);

Route::get("termTaxonomys", [TermTaxonomyController::class, 'index']);
Route::get("termTaxonomys/{id}", [TermTaxonomyController::class, 'show']);

Route::get("usermetas", [UsermetaController::class, 'index']);
Route::get("usermetas/{id}", [UsermetaController::class, 'show']);

Route::get("users", [UserController::class, 'index']);
Route::get("users/{id}", [UserController::class, 'show']);