<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PostsController::class, 'index']);


Route::get('login', [UserAuthController::class, 'login'])->middleware('AlreadyLoggedIn');
Route::get('register', [UserAuthController::class, 'register'])->middleware('AlreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])->name('adminpage.create');
Route::post('check', [UserAuthController::class, 'check'])->name('adminpage.check');
Route::get('profile', [UserAuthController::class, 'profile'])->middleware('isLogged');
Route::get('logout', [UserAuthController::class, 'logout']);
Route::get('edit', [UserAuthController::class, 'edit']);
Route::post('update', [UserAuthController::class, 'update'])->name('adminpage.update');

Route::get('registerPost', [PostsController::class, 'registerPost']);
Route::post('createPost', [PostsController::class, 'createPost'])->name('createPost');
Route::get('editPost/{id}', [PostsController::class, 'editPost'])->name('editPost');
Route::post('updatePost', [PostsController::class, 'updatePost'])->name('updatePost');
Route::get('deletePost/{id}',[PostsController::class, 'deletePost']);
