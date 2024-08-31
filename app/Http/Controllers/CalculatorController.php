<?php

use Illuminate\Http\Request;

function calculate(Request $request)
{
    $request->validate([
        'number1' => 'required|numeric',
        'number2' => 'required|numeric',
        'operation' => 'required|string|in:add,subtract,multiply,divide',
    ]);

    $result = match ($request->operation) {
        'add' => $request->number1 + $request->number2,
        'subtract' => $request->number1 - $request->number2,
        'multiply' => $request->number1 * $request->number2,
        'divide' => $request->number2 != 0 ? $request->number1 / $request->number2 : 'Error: División por cero',
        default => 'Error: Operación inválida',
    };

    return back()->with('result', $result);
}
