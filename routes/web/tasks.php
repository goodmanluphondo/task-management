<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Tasks')->group(function () {
    Route::resource('tasks', 'TaskController');
});
