<?php

use App\Http\Controllers\PostTextController;
use Illuminate\Support\Facades\Route;


Route::apiResource('/', PostTextController::class);
