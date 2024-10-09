<?php

use App\Http\Controllers\Dashboard\DashbaordController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', DashbaordController::class)->name('dashboard');
