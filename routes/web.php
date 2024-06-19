<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContentController::class, 'home']);
Route::get('/about', [ContentController::class, 'about']);
Route::get('/projects', [ContentController::class, 'projects']);
Route::get('/contact', [ContentController::class, 'contact']);
Route::get('/send', function () {
  abort(419);
});