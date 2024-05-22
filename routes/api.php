<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SymbolCountController;
use App\Http\Controllers\MinNumberController;
use App\Http\Controllers\OddSumController;
use App\Http\Controllers\DeclensionController;

Route::post('/declension', [DeclensionController::class, 'handleRequest']);
Route::post('/count-symbol', [SymbolCountController::class, 'handleRequest']);
Route::post('/min-number', [MinNumberController::class, 'handleRequest']);
Route::post('/odd-sum', [OddSumController::class, 'handleRequest']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
