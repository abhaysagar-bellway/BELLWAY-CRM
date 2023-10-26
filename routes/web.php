<?php

use Illuminate\Support\Facades\Route;
use App\Models\Useradmin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ProposalDetailsController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\ClientDetailController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
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
Route::get('/Searchinquiry',[InquiryController::class,'Searchinquiry']);
Route::get('/Addinquiry',[InquiryController::class,'Addinquiry']);
Route::get('/Newinquiry',[InquiryController::class,'Newinquiry']);
Route::get('/ClientDetail',[ClientDetailController::class,'ClientDetail']);
Route::get('/proposaldetails',[ProposalDetailsController::class,'proposaldetails']);
Route::get('/pendingFollowup',[FollowupController::class, 'pendingFollowup']);
Route::get('/doneFollowup',[FollowupController::class, 'doneFollowup']);
Route::get('/lead',[LeadController::class,'lead']);
Route::get('/chat',[ChatController::class,'chat'])->name('çhat');


//Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::post('/todo', [DashboardController::class, 'addTodo']);
