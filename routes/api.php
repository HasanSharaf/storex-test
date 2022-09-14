<?php

use App\Http\Controllers\Api\AuthTokenController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moviesController;
use App\Http\Controllers\UsersController;

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


//Movies Api's CRUD 
Route::get('/movies', [MoviesController::class, 'index']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/createMovies', [moviesController::class, 'create']);
    Route::post('/updateMovies/{id}', [moviesController::class, 'update']);
    Route::delete('/deleteMovies/{id}', [moviesController::class, 'destroy']);
});

//Categories Api's CRUD
Route::get('/categories', [CategoriesController::class, 'index']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/createCategory', [CategoriesController::class, 'create']);
    Route::post('/updateCategory/{id}', [CategoriesController::class, 'update']);
    Route::delete('/deleteCategory/{id}', [CategoriesController::class, 'destroy']);
});

//Users Api's CRUD
Route::get('/users', [UsersController::class, 'index']);
Route::post('/updateUser/{id}', [UsersController::class, 'update'])->middleware(['auth:sanctum']);
Route::delete('/deleteUser/{id}', [UsersController::class, 'destroy'])->middleware(['auth:sanctum']);

//Auth Api Token0
Route::post('/auth/register', [AuthTokenController::class, 'createUser']);
Route::post('/auth/login', [AuthTokenController::class, 'loginUser']);

