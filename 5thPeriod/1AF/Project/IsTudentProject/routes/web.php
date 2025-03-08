<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\RoomsController;

Route::get('/template', [TemplateController::class, 'index']);
Route::get('/', [RoomsController::class, 'list']);
Route::get('/rooms/{Name}', [RoomsController::class, 'detail']);
