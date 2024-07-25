<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/suma/{num1}/{num2}', [CalculatorController::class, 'suma']);
Route::get('/mult/{num1}/{num2}', [CalculatorController::class, 'mult']);
