<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminpanel\DashboardController;
use App\Http\Controllers\Auth\AuthenticationController;

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

// Auth View Controller
Route::get('/', [AuthenticationController::class, 'index']);
Route::get('/login', [AuthenticationController::class, 'index']);
Route::get('/register', [AuthenticationController::class, 'register']);
Route::get('/reset', [AuthenticationController::class, 'reset']);



Route::get('/dashboard', [DashboardController::class, 'index']);