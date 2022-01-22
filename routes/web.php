<?php

use App\Http\Controllers\UserController;
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
Route::view("signin", 'signin');
Route::view("signup", 'signup');
Route::prefix('users')->group(function () {
    Route::post('store', [UserController::class, 'store']);
    Route::post('logs', [UserController::class, 'logs']);
});
Route::view("post", 'post');
Route::view("addpost", 'add');
Route::view("commint", 'commint');
Route::view("profile", 'profile');
Route::view("editprofile", 'editprofile');
