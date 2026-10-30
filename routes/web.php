<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbcController;
use App\Http\Controllers\UserApiController;
Route::resource("/users",UserController::class);

Route::apiResource("/api/users",UserApiController::class);

