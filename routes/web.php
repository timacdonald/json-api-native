<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/users', UserController::class);
Route::resource('/posts', PostController::class);
Route::resource('/comments', CommentController::class);
Route::resource('/profiles', ProfileController::class);
