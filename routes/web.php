<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/form', [FormController::class, 'index']);

//AUTH
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'register']);
