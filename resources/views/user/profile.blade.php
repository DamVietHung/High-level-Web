<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($user)
        <h3>User Name: {{ $user->name }}</h3>
    @else
        <h3>User not found</h3>
    @endif
</body>
</html>