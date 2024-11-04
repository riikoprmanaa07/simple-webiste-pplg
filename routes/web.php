<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\App;

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

Route::get('admin',function(){
    return view('admin.dashboard');
})->middleware('auth');

Route::get('admin/categories',function(){
    return view('admin.categories.index');
})->middleware('auth');

Route::post('admin/category',[App\Http\Controllers\CategoryController::class,'create']);

Route::get('login',function(){
    return view('admin.login');
})->name(name: 'login');

Route::post('login', [AuthController::class, 'login']);