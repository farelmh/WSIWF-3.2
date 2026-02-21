<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', [PageController::class, 'index'])->name('admin');