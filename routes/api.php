<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\
{
    SymbolCountController,
    MinNumberController,
    OddSumController,
    DeclensionController
};

$controllers = [
    '/declension' => DeclensionController::class,
    '/count-symbol' => SymbolCountController::class,
    '/min-number' => MinNumberController::class,
    '/odd-sum' => OddSumController::class,
];

foreach ($controllers as $uri => $controller) {
    Route::post($uri, [$controller, 'handleRequest']);
}

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
