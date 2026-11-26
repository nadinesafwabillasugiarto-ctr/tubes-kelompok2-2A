<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/waste-categories', fn () => view('dashboard'))->name('waste-categories.index');
Route::get('/deposits', fn () => view('dashboard'))->name('deposits.index');
Route::get('/redemptions', fn () => view('dashboard'))->name('redemptions.index');