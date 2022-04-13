<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="container">
    <div class="container">
        <div class="container title">
            <h1 class="hdText">Pizza List</h1>
            <div class="type"><p>{{$type}} - {{$base}}</p></div>
        </div>
    </div>
</body>
</html>