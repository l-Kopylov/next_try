<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;

Route::get('/', [BbsController::class, 'index']);
Route::get('/{bb}', [BbsController::class, 'detail']);

