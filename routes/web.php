<?php

use App\Http\Controllers\CreatePostController;
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


Route::view("post", 'post')->name('posts.show');

Route::view("signin", 'signin')->name('signin');
Route::view("signup", 'signup');
Route::prefix('users')->group(function () {
    Route::post('store', [UserController::class, 'store']);
    Route::post('login', [UserController::class, 'login']);
    Route::view("profile", 'profile')->middleware('auth');
});

Route::view("commint", 'commint');

Route::view("viewpost", 'viewpost');

Route::middleware(['auth'])->group(function () {
    Route::post('editprofile', [UserController::class, 'update']);
    Route::view("editprofile", 'editprofile');
    Route::post('createpost', [CreatePostController::class, 'store'])->name('posts.create');
    Route::get('createpost', [CreatePostController::class, 'index'])->name('posts.index');

    // Route::view("createpost", 'createpost');



    Route::post('logout', [SessionController::class, 'destroy']);

    //
});
