<?php

use App\Http\Controllers\Api\User_ManagementController;
use Illuminate\Support\Facades\Route;

Route::apiResource('user_management', User_ManagementController::class);
