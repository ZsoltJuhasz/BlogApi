<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get("/blogs", [BlogController::class, "index"]);
Route::post("/blogs", [BlogController::class, "store"]);
Route::get("/blogs/{blog}", [BlogController::class, "show"]);
Route::put("/blogs/{blog}", [BlogController::class, "update"]);
Route::delete("/blogs/{id}", [BlogController::class,  "destroy"]);