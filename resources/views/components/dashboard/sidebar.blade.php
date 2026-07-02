<aside id="dashboard-sidebar" class="bg-white border-r border-gray-200 w-64 flex flex-col h-full fixed inset-y-0 left-0 z-30 transform -translate-x-full lg:translate-x-0 lg:static lg:inset-auto transition-transform duration-300 ease-in-out">
    
    <!-- Logo -->
    <div class="h-16 flex items-center px-6 border-b border-gray-100">
        <a href="/" class="flex items-center gap-2">
            <img src="{{ asset('frontend/images/our company/logo.png') }}" class="h-8 w-auto" alt="HireFlow Logo" onerror="this.src='https://placehold.co/120x40/2e55fa/ffffff?text=HireFlow'">
            <span class="text-xl font-bold text-gray-900 tracking-tight">Hire<span class="text-primary">Flow</span></span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
        @php
            $navItems = [
                ['name' => 'Dashboard', 'icon' => 'fa-solid fa-chart-pie', 'route' => 'candidate.dashboard', 'url' => '/candidate/dashboard'],
                ['name' => 'My Profile', 'icon' => 'fa-regular fa-user', 'route' => 'candidate.profile', 'url' => '#'],
                ['name' => 'My Resume', 'icon' => 'fa-regular fa-file-lines', 'route' => 'candidate.resume', 'url' => '#'],
                ['name' => 'Applied Jobs', 'icon' => 'fa-solid fa-briefcase', 'route' => 'candidate.applied', 'url' => '#'],
                ['name' => 'Saved Jobs', 'icon' => 'fa-regular fa-bookmark', 'route' => 'candidate.saved', 'url' => '#'],
                ['name' => 'Notifications', 'icon' => 'fa-regular fa-bell', 'route' => 'candidate.notifications', 'url' => '#', 'badge' => '3'],
            ];
            
            $bottomItems = [
                ['name' => 'Settings', 'icon' => 'fa-solid fa-gear', 'route' => 'candidate.settings', 'url' => '#'],
                ['name' => 'Logout', 'icon' => 'fa-solid fa-arrow-right-from-bracket', 'route' => 'logout', 'url' => '#'],
            ];
            
            $currentPath = request()->path();
        @endphp

        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">Main Menu</div>
        
        @foreach ($navItems as $item)
            @php
                // Temporary logic until real routes are named
                $isActive = str_contains($currentPath, str_replace('/', '', $item['url']));
                
                // Handle Laragon subfolder routing dynamically
                $routeName = $item['route'];
                if (request()->is('HireFlow/*') && !str_starts_with($routeName, 'hireflow.')) {
                    $routeName = 'hireflow.' . $routeName;
                }
            @endphp
            <a href="{{ route($routeName) }}" 
               class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium transition-colors group {{ $isActive ? 'bg-primary/10 text-primary' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                
                <i class="{{ $item['icon'] }} w-5 h-5 mr-3 flex-shrink-0 text-lg transition-colors {{ $isActive ? 'text-primary' : 'text-gray-400 group-hover:text-gray-600' }}"></i>
                
                <span class="flex-1 truncate">{{ $item['name'] }}</span>
                
                @if(isset($item['badge']))
                    <span class="bg-primary text-white ml-auto inline-block py-0.5 px-2 text-xs font-semibold rounded-full">
                        {{ $item['badge'] }}
                    </span>
                @endif
            </a>
        @endforeach
    </nav>

    <!-- Bottom Actions -->
    <div class="p-4 border-t border-gray-100 space-y-1">
        @foreach ($bottomItems as $item)
            <a href="{{ $item['url'] }}" 
               class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium transition-colors group {{ $item['name'] === 'Logout' ? 'text-red-600 hover:bg-red-50' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                
                <i class="{{ $item['icon'] }} w-5 h-5 mr-3 flex-shrink-0 text-lg transition-colors {{ $item['name'] === 'Logout' ? 'text-red-500 group-hover:text-red-600' : 'text-gray-400 group-hover:text-gray-600' }}"></i>
                
                <span class="flex-1 truncate">{{ $item['name'] }}</span>
            </a>
        @endforeach
    </div>
</aside>
