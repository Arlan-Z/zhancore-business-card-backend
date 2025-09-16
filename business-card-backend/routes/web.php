<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\AcceptEverythingMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->middleware(AcceptEverythingMiddleware::class);
