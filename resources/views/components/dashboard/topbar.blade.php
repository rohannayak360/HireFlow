<header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-4 sm:px-6 lg:px-8 z-10 sticky top-0">
    <!-- Left side: Mobile Toggle & Search -->
    <div class="flex items-center flex-1 gap-4">
        <button onclick="toggleSidebar()" class="text-gray-500 hover:text-gray-700 focus:outline-none lg:hidden p-2 rounded-md hover:bg-gray-100 transition-colors">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>

        <!-- Global Search -->
        <div class="hidden lg:flex flex-1 max-w-3xl ml-8">
            <div class="flex w-full bg-gray-50/80 border border-gray-200 rounded-full shadow-sm hover:bg-white hover:shadow-md transition-all duration-300 focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary focus-within:bg-white overflow-hidden">
                <div class="relative flex-1 flex items-center border-r border-gray-200">
                    <div class="pl-4 pr-2">
                        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                    </div>
                    <input type="text" 
                           class="w-full py-2.5 pl-2 pr-4 bg-transparent text-sm text-gray-900 placeholder-gray-500 focus:outline-none" 
                           placeholder="Job title, keywords, or company...">
                </div>
                
                <div class="relative flex-1 hidden xl:flex items-center border-r border-gray-200 bg-transparent">
                    <div class="pl-4 pr-2">
                        <i class="fa-solid fa-location-dot text-gray-400"></i>
                    </div>
                    <input type="text" 
                           class="w-full py-2.5 pl-2 pr-4 bg-transparent text-sm text-gray-900 placeholder-gray-500 focus:outline-none" 
                           placeholder="City, state, or remote">
                </div>

                <button class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-primary hover:bg-gray-100 transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-sliders"></i> <span class="hidden xl:inline">Filters</span>
                </button>
                <button class="px-6 py-2.5 bg-primary text-white text-sm font-semibold hover:bg-primary-hover transition-colors">
                    Search
                </button>
            </div>
        </div>
    </div>

    <!-- Right side: Actions & Profile -->
    <div class="flex items-center gap-2 sm:gap-4">
        
        <!-- Theme Toggle (Placeholder) -->
        <button class="p-2 text-gray-400 hover:text-gray-600 rounded-full hover:bg-gray-100 transition-colors relative" title="Toggle Theme">
            <i class="fa-solid fa-moon"></i>
        </button>

        <!-- Messages -->
        <button class="p-2 text-gray-400 hover:text-gray-600 rounded-full hover:bg-gray-100 transition-colors relative">
            <i class="fa-regular fa-envelope text-lg"></i>
            <span class="absolute top-1.5 right-1.5 block h-2 w-2 rounded-full bg-red-500 ring-2 ring-white"></span>
        </button>

        <!-- Notifications -->
        <button class="p-2 text-gray-400 hover:text-gray-600 rounded-full hover:bg-gray-100 transition-colors relative">
            <i class="fa-regular fa-bell text-lg"></i>
            <span class="absolute top-1.5 right-1.5 block h-2 w-2 rounded-full bg-primary ring-2 ring-white"></span>
        </button>

        <!-- Divider -->
        <div class="h-6 w-px bg-gray-200 mx-1"></div>

        <!-- User Profile Dropdown -->
        <div class="relative flex items-center">
            <button class="flex items-center gap-2 focus:outline-none p-1 rounded-full hover:bg-gray-50 transition-colors">
                <img class="h-8 w-8 rounded-full object-cover border border-gray-200 shadow-sm" 
                     src="https://ui-avatars.com/api/?name=John+Doe&background=2e55fa&color=fff" 
                     alt="User avatar">
                <div class="hidden sm:block text-left text-sm ml-1 mr-2">
                    <p class="text-gray-700 font-medium leading-none mb-1">John Doe</p>
                    <p class="text-gray-500 text-xs leading-none">Candidate</p>
                </div>
                <i class="fa-solid fa-chevron-down text-gray-400 text-xs hidden sm:block"></i>
            </button>
            
            <!-- Dropdown Menu (Hidden by default, can be integrated with Alpine.js later) -->
            <!-- 
            <div class="absolute right-0 top-full mt-2 w-48 rounded-lg shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                <div class="border-t border-gray-100"></div>
                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign out</a>
            </div> 
            -->
        </div>
    </div>
</header>
