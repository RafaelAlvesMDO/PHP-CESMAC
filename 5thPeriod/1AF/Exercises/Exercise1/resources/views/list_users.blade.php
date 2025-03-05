<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>

<body>
    <h1>Users List</h1>
    <ol>
        @foreach ($users as $id => $name)
        <li><a href="{{ url('users/' . ($id + 1)) }}"> {{$name}} </a></li>
        @endforeach
    </ol>
</body>

</html>