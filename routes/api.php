<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
    Route::post('/contacts', [ApiController::class, "contacts"]);
    Route::get('/posts', [ApiController::class, "posts"]);
    Route::get('/projects', [ApiController::class, "projects"]);
    Route::get('/d_projects', [ApiController::class, "d_projects"]);
    Route::get('/lacales/uz', [ApiController::class, "uz"]);
    Route::get('/lacales/ru', [ApiController::class, "ru"]);
    Route::get('/lacales/en', [ApiController::class, "en"]);


