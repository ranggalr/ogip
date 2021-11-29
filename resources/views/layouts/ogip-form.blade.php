<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Registration' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">
</head>
<body>
    @routes
    @yield('body')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
