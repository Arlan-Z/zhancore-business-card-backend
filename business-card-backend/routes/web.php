<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\AcceptEverythingMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/clients', [MainController::class, 'clients'])->middleware(AcceptEverythingMiddleware::class);
Route::get('/projects', [MainController::class, 'projects'])->middleware(AcceptEverythingMiddleware::class);
Route::post('/contactDetails', [MainController::class, 'storeContactDetails'])->middleware(AcceptEverythingMiddleware::class);
