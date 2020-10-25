<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', HomeController::class);

Route::get('user', [UserController::class, 'index']);

Route::get('user/create', [UserController::class, 'create']);

Route::get('user/update/{id}', [UserController::class, 'update']);

Route::get('user/view/{id}', [UserController::class, 'view']);

Route::get('user/delete/{id}', [UserController::class, 'delete']);




