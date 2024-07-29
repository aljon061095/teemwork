<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon"/>

    <title>{{ config('app.name', 'Teemwork') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div id="app">
        @if (Auth::check())
        <div class="min-h-full">
            @include('layouts._shared.navbar')
                @include('layouts._shared.sidebar')
           
            <div class="p-6 mt-4 sm:ml-64">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
        @else
        <main>
            @yield('content')
        </main>
        @endif
    </div>
</body>
</html>
