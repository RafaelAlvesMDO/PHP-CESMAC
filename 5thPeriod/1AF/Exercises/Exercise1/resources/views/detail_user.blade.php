<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail</title>
</head>

<body>
    <h1>User Detail</h1>
    <p>Name: {{ $user }}</p>
    <a href="{{ url('/users') }}">Back to Users</a>
</body>

</html>