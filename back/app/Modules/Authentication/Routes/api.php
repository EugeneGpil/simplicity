<?php

use App\Modules\Authentication\Controllers\LoginController;
use App\Modules\Authentication\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:5,1')
    ->group(static function (): void {
        Route::post('/login', LoginController::class);
        Route::post('/register', RegisterController::class);
    });
