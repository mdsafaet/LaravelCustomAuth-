<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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
Route::get("login", [AuthController::class, "index"])->name("login");
Route::get("registration", [AuthController::class, "registration"])->name("registration");
Route::get("logout", [AuthController::class, "logout"])->name("logout");
Route::post("post-registration", [AuthController::class, "postregistration"])->name("registration.post");
