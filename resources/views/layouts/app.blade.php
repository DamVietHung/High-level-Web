<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/h.css') }}">
</head>
<body>
    <header>
        <h1>Laravel App</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/h.js') }}"></script>
</body>
</html>
