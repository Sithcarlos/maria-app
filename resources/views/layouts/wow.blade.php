<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('bootstrap5/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h1>ADMINISTRADOR World of Warcraft 3.3.5 La ira del Rey Exánime</h1>
            </div>

        </div>
        @yield('content')

    </div>
    <script src="{{ asset('bootstrap5/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap5/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap5/bootstrap.min.js') }}"></script>
</body>

</html>
