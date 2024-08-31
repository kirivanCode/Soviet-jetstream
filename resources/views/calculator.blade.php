<!-- resources/views/calculator.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        .calculator-form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .calculator-form input,
        .calculator-form select,
        .calculator-form button {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .calculator-form input:focus,
        .calculator-form select:focus {
            border-color: #007bff;
            outline: none;
        }

        .calculator-form button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        .calculator-form button:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
    </style>
</head>
<body>
    <form action="{{ route('calculate') }}" method="POST" class="calculator-form">
        @csrf

        @if (session('result'))
            <div class="alert alert-success">
                Resultado: {{ session('result') }}
            </div>
        @endif

        <input type="number" name="number1" placeholder="Número 1" required>
        <input type="number" name="number2" placeholder="Número 2" required>

        <select name="operation" required>
            <option value="add">Suma</option>
            <option value="subtract">Resta</option>
            <option value="multiply">Multiplicación</option>
            <option value="divide">División</option>
        </select>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
