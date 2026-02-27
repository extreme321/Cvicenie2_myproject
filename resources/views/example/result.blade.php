<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Výsledok Fibonacci</title>
    <style>
        body { font-family: sans-serif; padding: 20px; line-height: 1.6; }
        .result-box { background: #f4f4f4; padding: 15px; border-radius: 8px; }
    </style>
</head>
<body>

<h1>Výsledok výpočtu</h1>

<div class="result-box">
    <h2>Fibonacciho postupnosť pre n = {{ $n }}</h2>
    <ul>
        @foreach($sequence as $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
</div>

<p>
    <a href="/example/create">← Späť na zadanie</a>
</p>

</body>
</html>
