<?php

use App\Http\Controllers\EditUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('logout', function () {
//     return Auth::logout();
// });

Route::view("signin", 'signin')->name('signin');
Route::view("signup", 'signup');
Route::prefix('users')->group(function () {
    Route::post('store', [UserController::class, 'store']);
    Route::post('login', [UserController::class, 'login']);
    Route::view("profile", 'profile')->middleware('auth');
    Route::view("editprofile", 'editprofile');
    Route::post('editprofile', [UserController::class, 'update']);
});
Route::post('logout', [SessionController::class, 'destroy']);
Route::view("post", 'post');
Route::view("addpost", 'add');
Route::view("commint", 'commint');
