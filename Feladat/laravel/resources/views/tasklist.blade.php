<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task list</title>
</head>
<body>
    <h1>Your Task</h1>
    <p>{{$foobar}}</p>
    <ul>
        @foreach($tasks as $task)
        <li>{{ $task}}</li>
        @endforeach
    </ul>
</body>
</html>