<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::resource('student', StudentController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', [PageController::class, 'index'])->name('admin');