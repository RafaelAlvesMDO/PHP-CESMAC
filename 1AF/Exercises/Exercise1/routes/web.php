<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/users', [UserController::class, 'list']);
Route::get('/users/{id}', [UserController::class, 'detail']);