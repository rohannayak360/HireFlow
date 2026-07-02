<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HireFlow') }} - {{ $title ?? 'Dashboard' }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend/images/our company/favicon.png') }}" type="image/x-icon">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles and Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <x-dashboard.sidebar />

    <!-- Main Content Wrapper -->
    <div class="flex flex-col flex-1 w-full h-full overflow-hidden bg-gradient-to-br from-gray-50 via-white to-primary/5">
        <!-- Top Navigation -->
        <x-dashboard.topbar />

        <!-- Scrollable Main Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 sm:p-6 lg:p-8 lg:pl-10">
            <div class="w-full max-w-7xl">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Mobile Sidebar Backdrop -->
    <div id="sidebarBackdrop" class="fixed inset-0 bg-gray-900/50 z-20 hidden lg:hidden transition-opacity" onclick="toggleSidebar()"></div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('dashboard-sidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            
            sidebar.classList.toggle('-translate-x-full');
            backdrop.classList.toggle('hidden');
        }
    </script>
</body>
</html>
