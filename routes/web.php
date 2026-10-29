<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/' [EquipmentController::class, 'index']);
Route::get('/', [EquipmentController::class, 'create']);
Route::post('/', [EquipmentController::class, 'store']);
Route::get('/', [EquipmentController::class, 'show']);
Route::get('/', [LoanController::class, 'create']);
Route::post('/', [LoanController::class, 'store']);