<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use function Illuminate\Cache\get;

Route::get('/', [HomeController::class, 'index'])->name('cilent.home.index');
Route::get('/category/{category}', [PostController::class, 'show'])->name('category.show');
Route::get('/category/{id}', [NavController::class, 'navbar'])->name('nav.navbar');
Route::get('/movie/{id}', [MovieController::class, 'video'])->name('video.m');
