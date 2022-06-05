<?php

use App\Models\Listing;
use App\Models\Civilian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CivilianController;

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

// All Listings
Route::get('/', [CivilianController::class, 'index']);
Route::get('/civilians/create', [CivilianController::class, 'create']);
Route::post('/civilians', [CivilianController::class, 'store']);
Route::get('/civilians/{civilian}/edit', [CivilianController::class, 'edit']);
Route::put('/civilians/{civilian}', [CivilianController::class, 'update']);
Route::delete('/civilians/{civilian}', [CivilianController::class, 'destroy']);
Route::get('/civilians/{civilian}', [CivilianController::class, 'show']);
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);