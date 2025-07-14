<?php

use App\Modules\User\Controllers\MeController;
use Illuminate\Support\Facades\Route;

Route
    ::middleware('auth:sanctum')
    ->get('/me', MeController::class);
