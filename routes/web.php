<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/web/welcome.php';
require __DIR__ . '/web/projects.php';
require __DIR__ . '/web/tasks.php';
require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    require __DIR__ . '/web/profile.php';

    Route::middleware('verified')->group(function () {
        require __DIR__ . '/web/dashboard.php';
        require __DIR__ . '/web/user.php';
    });
});


