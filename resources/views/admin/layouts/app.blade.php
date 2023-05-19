<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title . ' | Laravel' : 'Laravel' }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/favicon/laravel_icon') }}" type="image/x-icon">
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>

    <div class="flex h-screen overflow-x-hidden relative">
        {{-- Sidebar Goes here --}}
        @include('admin.layouts.sidebar')
        <div class="main h-full w-full bg-gray-100">
            <div class="w-full py-9 bg-white fixed z-10">
                <div class="flex flex-row items-center justify-between laptop:justify-end px-8">
                    <div class="toggle-sidebar block laptop:hidden">
                        <input type="checkbox" class="checkbox-toggle-sidebar hidden">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </div>
                    <div class="cursor-pointer">
                        <h6>Fathan Maulana</h6>
                    </div>
                </div>
            </div>
            <div class="container mx-auto px-8 py-4 mt-24">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>
</body>

</html>
