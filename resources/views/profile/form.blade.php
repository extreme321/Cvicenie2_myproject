<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulár</title>
</head>
<body>

<form method="POST" action="/profile/result">
    @csrf
    <p>
        <label>Meno:</label><br>
        <input type="text" name="name">
    </p>

    <p>
        <label>Email:</label><br>
        <input type="email" name="email">
    </p>

    <p>
        <label>Vek:</label><br>
        <input type="number" name="age">
    </p>

    <p>
        <label>Rola:</label><br>
        <select name="role">
            @isset($roles)
                @foreach ($roles as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            @endisset
        </select>
    </p>

    <p>
        <label>Zručnosti:</label><br>
        @isset($skills)
            @foreach ($skills as $skill)
                <label>
                    <input type="checkbox" name="skills[]" value="{{ $skill }}">{{ $skill }}
                </label><br>
            @endforeach
        @endisset
    </p>

    <button type="submit">Odoslať</button>
</form>

<hr>

</body>
</html>
