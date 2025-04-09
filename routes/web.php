<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\StudentsManager;
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
    return view('welcome');});
Route::get("home",[AuthManager::class,"home"])->name("homepage");
Route::get("register",[AuthManager::class,"register"])->name("register");
Route::post("register",[AuthManager::class,"registerpost"])->name("registerpost");
Route::get("login",[AuthManager::class,'login'])->name("login");
Route::post("login",[AuthManager::class,"loginpost"])->name("loginpost");
Route::get("add_students",[StudentsManager::class,"add_students"])->name("add_students");
Route::post("post_students",[StudentsManager::class,"post_students"])->name("post_students");
Route::get("view",[StudentsManager::class,"view"])->name("view");
Route::get("details/{id}",[StudentsManager::class,"details"])->name("details");
