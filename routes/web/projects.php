<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Projects')->group(function () {
    Route::resource('tasks', 'ProjectController');
});
