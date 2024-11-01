<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CatsController::class, 'index'])->name('/');
Route::get('/create', [CatsController::class, 'create'])->name('create');
Route::post('/create/new', [CatsController::class, 'createnew'])->name('createnew');
Route::get('/mycats', [CatsController::class, 'show'])->name('show');
Route::get('/log', [AuthController::class, 'logshow'])->name('logshow');
Route::get('/reg', [AuthController::class, 'regshow'])->name('regshow');
Route::post('/log/n', [AuthController::class, 'log'])->name('log');
Route::post('/reg/n', [AuthController::class, 'reg'])->name('reg');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');