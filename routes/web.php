<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile')->middleware('auth');
    Route::get('edit', [UserController::class, 'editprofile'])->name('user.editprofile')->middleware('auth');
    Route::post('edit', [UserController::class, 'update'])->name('user.update')->middleware('auth');
    Route::post('store', [UserController::class, 'store']);
    Route::post('login', [UserController::class, 'login']);
});

Route::get('posts', [PostController::class, 'index'])->name('posts.show');

Route::middleware(['auth'])->group(function () {
    Route::prefix('posts')->group(function () {
    Route::get('category/{title}', [PostController::class, 'category'])->name('posts.category');
    Route::get('view/{id}', [PostController::class, 'view'])->name('posts.view');
    Route::post('create', [PostController::class, 'store']);
    Route::get('create', [PostController::class, 'create'])->name('posts.create');
    Route::post('update/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('delete/{id}', [PostController::class, 'delete'])->name('posts.delete');
    Route::post('comment/{id}', [CommentController::class, 'comment'])->name('comment.posts');
    Route::get('editcomment/{id}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::POST('updatecomment/{id}', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('deletecomment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
}); 
   
    Route::post('logout', [SessionController::class, 'destroy']);
    //
});
