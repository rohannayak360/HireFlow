<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HireFlow') }} - {{ $title ?? 'Authentication' }}</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend/images/our company/favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/css/auth.css', 'resources/js/app.js', 'resources/js/auth.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-900 overflow-x-hidden">
    
    <!-- Fixed Background Layer -->
    <div class="fixed inset-0 w-full h-full auth-bg-gradient z-0"></div>
    <div class="fixed inset-0 w-full h-full z-0 pointer-events-none">
        <x-auth.animated-background />
    </div>

    <!-- Scrollable Content Layer -->
    <div id="auth-wrapper" class="relative z-10 min-h-screen w-full flex items-center justify-center py-6 md:py-2">
        <!-- Mouse Glow -->
        <div id="mouse-glow" class="mouse-glow hidden md:block"></div>

        <!-- Main Content (Glass Card) -->
        <div class="relative w-full max-w-5xl px-4 sm:px-6 lg:px-8">
            <x-auth.glass-card>
                {{ $slot }}
            </x-auth.glass-card>
        </div>
    </div>

</body>
</html>
