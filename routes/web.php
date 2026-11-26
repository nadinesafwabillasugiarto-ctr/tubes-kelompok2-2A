<?php

use App\Http\Controllers\WasteCategoryController;
use App\Http\Controllers\DepositController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/waste-categories', fn () => view('dashboard'))->name('waste-categories.index');
Route::get('/deposits', fn () => view('dashboard'))->name('deposits.index');
Route::get('/redemptions', fn () => view('dashboard'))->name('redemptions.index');

Route::get('/deposits', [DepositController::class, 'index'])->name('deposits.index');
Route::get('/deposits/create', [DepositController::class, 'create'])->name('deposits.create');
Route::post('/deposits', [DepositController::class, 'store'])->name('deposits.store');


Route::resource('waste-categories', WasteCategoryController::class)->except(['show']);

