<?php

use App\Http\Controllers\Admin\UserControllers;
use App\Http\Controllers\Admin\PostControllers;
use App\Http\Controllers\Admin\CommentControllers;
use App\Http\Controllers\Admin\CategoryControllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::view("signin", 'signin')->name('signin');
Route::view("signup", 'signup');
Route::prefix('users')->group(function () {
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile')->middleware('auth');
    Route::get('edit', [UserController::class, 'editprofile'])->name('user.editprofile')->middleware('auth');
    Route::post('edit', [UserController::class, 'update'])->name('user.update')->middleware('auth');
});

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
    Route::view("dashboard", 'admin.dashboard')->name('dashboard');
    Route::get('users', [UserControllers::class, 'main'])->name('admin.users');
    Route::get('user-edit/{id}', [UserControllers::class, 'edit'])->name('admin.users-edit');
    Route::put('user-update/{id}',[UserControllers::class,'update'])->name('admin.users-update');
    Route::delete('user-delete/{id}',[UserControllers::class,'destroy'])->name('admin.users-delete');
    Route::get('post',[PostControllers::class,'main'])->name('admin.post');
    Route::get('post-edit/{id}', [PostControllers::class, 'edit'])->name('admin.post-edit');
    Route::put('post-update/{id}',[PostControllers::class,'update'])->name('admin.post-update');
    Route::delete('post-delete/{id}',[PostControllers::class,'destroy'])->name('admin.post-delete');
    Route::get('comment',[CommentControllers::class,'main'])->name('admin.comment');
    Route::delete('comment-delete/{id}',[CommentControllers::class,'destroy'])->name('admin.comment-delete');
    Route::view("category", 'admin.category')->name('admin.category');
    Route::post('category', [CategoryControllers::class, 'store'])->name('admin.category-add');
    Route::get('category', [CategoryControllers::class, 'main'])->name('admin.category');
    Route::get('category-edit/{id}', [CategoryControllers::class, 'edit'])->name('admin.category-edit');
    Route::put('category-update/{id}',[CategoryControllers::class,'update'])->name('admin.category-update');
    Route::delete('category-delete/{id}',[CategoryControllers::class,'destroy'])->name('admin.category-delete');

});

Route::get('posts', [PostController::class, 'index'])->name('posts.show');

Route::middleware(['auth'])->group(function () {
    Route::prefix('posts')->group(function () {
        Route::get('category/{id}', [PostController::class, 'category'])->name('posts.category');
        Route::get('view/{post}', [PostController::class, 'view'])->name('posts.view');
        Route::post('create', [PostController::class, 'store']);
        Route::get('create', [PostController::class, 'create'])->name('posts.create');
        Route::put('update/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::get('edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
        Route::delete('delete/{post}', [PostController::class, 'delete'])->name('posts.delete');
        Route::prefix('comment')->group(function () {
            Route::post('comment/{id}', [CommentController::class, 'comment'])->name('comment.posts');
            Route::get('edit/{comment}', [CommentController::class, 'edit'])->name('comment.edit');
            Route::POST('update/{comment}', [CommentController::class, 'update'])->name('comment.update');
            Route::delete('delete/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
        });
    });
    //
});
