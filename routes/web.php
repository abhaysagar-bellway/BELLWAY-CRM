<?php

use Illuminate\Support\Facades\Route;
use App\Models\Useradmin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[LoginController::class,'AdminLogin']);
Route::post('/login',[LoginController::class,'login'])->name('admin.submit');
Route::get('/dashboard',[DashboardController::class,'dashboard']);


