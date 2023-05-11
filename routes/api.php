<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/supports', \App\Http\Controllers\Api\SupportController::class);
