<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('head')

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="text-dark">
    @include('layouts.navigation')

    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @include('alert')
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>
</html>
