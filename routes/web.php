<?php

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
    return view('welcome');
});
Route::prefix("/page")->group(function (){
    Route::get("/", );
});
Route::get("/login", [\App\Http\Controllers\AuthController::class, "showFormLogin"])->name("admin.showFormLogin");
Route::post("/login", [\App\Http\Controllers\AuthController::class, "login"])->name("admin.login");
Route::get("/logout", [\App\Http\Controllers\AuthController::class, "logout"])->name("admin.logout");
