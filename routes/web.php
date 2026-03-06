<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/detail', [BlogController::class, 'detail'])->name('blog.detail');


