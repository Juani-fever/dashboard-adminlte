<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstudianteController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('estudiantes', EstudianteController::class);