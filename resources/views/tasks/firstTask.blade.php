<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks page</title>
</head>
<body>
    <h1>Welcome to the tasks</h1>
    <p>Today is: {{ date('Y-m-d H:i:s') }}</p>
    <ul>
        <li>First task</li>
        <li>Second task</li>
        <li>Third one</li>
    </ul>

    <hr>
    <ul>
        @foreach (['one', 'two', 'three'] as $number)
        <li>{{$number}}</li>
        @endforeach
    </ul>
</body>
</html>