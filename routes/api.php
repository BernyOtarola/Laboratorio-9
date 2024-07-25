<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::prefix('calculator')->group(function () {
    Route::get('/suma/{num1}/{num2}', [CalculatorController::class, 'suma']);
    Route::get('/mult/{num1}/{num2}', [CalculatorController::class, 'mult']);
});
