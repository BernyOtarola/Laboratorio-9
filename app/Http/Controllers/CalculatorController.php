<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CalculatorController extends Controller
{
    /**
     * Suma dos números.
     *
     * @param int $num1
     * @param int $num2
     * @return \Illuminate\Http\JsonResponse
     */
    public function suma($num1, $num2): JsonResponse
    {
        $result = $num1 + $num2;
        return response()->json([
            'operation' => 'suma',
            'num1' => $num1,
            'num2' => $num2,
            'result' => $result
        ], 200);
    }

    /**
     * Multiplica dos números.
     *
     * @param int $num1
     * @param int $num2
     * @return \Illuminate\Http\JsonResponse
     */
    public function mult($num1, $num2): JsonResponse
    {
        $result = $num1 * $num2;
        return response()->json([
            'operation' => 'multiplicación',
            'num1' => $num1,
            'num2' => $num2,
            'result' => $result
        ], 200);
    }
}
