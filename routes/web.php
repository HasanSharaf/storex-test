<?php

use App\Http\Controllers\moviesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('movie', moviesController::class);
// Route::get('/movies',[moviesController::class, 'index']);
// Route::get('/createMovies',[moviesController::class, 'create']);
// Route::post('/movies',[moviesController::class, 'store']);
// Route::post('/editMovies/{id}',[moviesController::class, 'edit']);
// Route::put('/updateMovies',[moviesController::class, 'update']);
// Route::delete('/deleteMovies/{id}',[moviesController::class, 'destroy']);