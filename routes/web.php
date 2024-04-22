<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashBoardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// home route 

// frontend  Route 

Route::get('/',[HomeController::class,'index']);

Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'authLogin']);

Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'create_user']);

Route::get('/forget-password',[AuthController::class,'forgetPassword']);


// admin dash Board route 

Route::get('/admin/dashboard',[DashBoardController::class,'index']);
