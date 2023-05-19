<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title . ' | Laravel' : 'Laravel' }}</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}"> --}}

    <link rel="shortcut icon" href="{{ asset('assets/favicon/laravel_icon.png') }}" type="image/x-icon">
    {{-- Material Icons --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> --}}
</head>

<body>

    <div
        class="min-h-screen py-10 flex flex-col w-full bg-gradient-to-r from-cyan-500 to-blue-500 items-center justify-center">

        @yield('content')
    </div>



    <script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>
</body>
</html>
