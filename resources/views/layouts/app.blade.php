<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Metronic')</title>
    
    <!-- Metronic CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Add other CSS files as needed -->
    
    @stack('styles')
</head>
<body>
    <!-- Header/Sidebar will go here -->
    <div class="container">
        @yield('content')
    </div>
    
    <!-- Metronic JS -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    @stack('scripts')
</body>
</html>