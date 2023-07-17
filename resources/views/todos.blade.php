<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>The Todos Page</h1>

    @foreach ($todos as $todo)
        <li>
            {{ $todo->name }}
        </li>
    @endforeach

</body>
</html>