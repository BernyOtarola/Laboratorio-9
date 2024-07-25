<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateNumbers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $num1 = $request->route('num1');
        $num2 = $request->route('num2');

        if (!is_numeric($num1) || !is_numeric($num2)) {
            return response()->json(['error' => 'Los parámetros deben ser números.'], 400);
        }

        return $next($request);
    }

}
