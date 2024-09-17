<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user/')->group(function(){
    Route::controller(UserController::class)->group(function(){
    Route::get('create','create');
    Route::get('list','list');
    Route::get('update','update');
    Route::get('delete','delete');
   });
});


Route::prefix('admins/')->group(function(){
    Route::controller(AdminController::class)->group(function(){
    Route::get('create','store');
    Route::get('list','index');
    Route::get('update/{id}','update');
    Route::get('delete/{id}','destroy');
   });
});


// Route::resource('admins',AdminController::class);
