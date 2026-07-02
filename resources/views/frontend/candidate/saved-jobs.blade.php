<x-layouts.dashboard title="Saved Jobs">
    <div class="w-full" x-data="{ view: 'grid', isLoading: false }">
        
        <!-- Breadcrumbs -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-gray-500">
                <li><a href="{{ route('candidate.dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="font-medium text-gray-900" aria-current="page">Saved Jobs</li>
            </ol>
        </nav>

        <!-- Page Header & Quick Actions -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight mb-2">Saved Jobs</h1>
                <p class="text-gray-500 text-sm max-w-2xl">Keep track of roles you're interested in. Don't wait too long—apply before the deadlines!</p>
            </div>
            
            <div class="flex flex-wrap items-center gap-3 shrink-0">
                <x-ui.button variant="secondary" icon="fa-solid fa-bell">Manage Alerts</x-ui.button>
                <x-ui.button variant="secondary" icon="fa-solid fa-magnifying-glass">Browse More</x-ui.button>
                <x-ui.button variant="primary" icon="fa-solid fa-paper-plane">Apply All Eligible</x-ui.button>
            </div>
        </div>

        <!-- Summary Metrics -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/10 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                        <i class="fa-regular fa-bookmark text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Total Saved</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">24</h3>
            </div>
            
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-emerald-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-bolt text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Recently Added</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">5</h3>
            </div>
            
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-red-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                        <i class="fa-regular fa-clock text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Expiring Soon</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">2</h3>
            </div>
            
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group hidden sm:block">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-blue-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-check-double text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Applied from Saved</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">12</h3>
            </div>
        </div>

        <!-- Toolbar (Search, Filter, View Toggle) -->
        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm mb-8 flex flex-col md:flex-row gap-4 items-center justify-between">
            
            <div class="flex-1 w-full flex flex-col sm:flex-row gap-3">
                <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                    </div>
                    <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-lg focus:ring-primary focus:border-primary sm:text-sm bg-gray-50 focus:bg-white transition-colors" placeholder="Search saved jobs...">
                </div>
                
                <div class="flex gap-3">
                    <select class="block w-40 border border-gray-200 rounded-lg py-2 pl-3 pr-10 focus:ring-primary focus:border-primary sm:text-sm bg-gray-50 focus:bg-white transition-colors">
                        <option value="">Job Type</option>
                        <option>Full-Time</option>
                        <option>Contract</option>
                    </select>
                    
                    <select class="block w-40 border border-gray-200 rounded-lg py-2 pl-3 pr-10 focus:ring-primary focus:border-primary sm:text-sm bg-gray-50 focus:bg-white transition-colors hidden sm:block">
                        <option value="">Work Mode</option>
                        <option>Remote</option>
                        <option>Hybrid</option>
                        <option>On-site</option>
                    </select>
                </div>
            </div>

            <!-- View Toggle -->
            <div class="hidden md:flex items-center bg-gray-100 rounded-lg p-1 shrink-0">
                <button @click="view = 'grid'" :class="{'bg-white shadow text-primary': view === 'grid', 'text-gray-500 hover:text-gray-700': view !== 'grid'}" class="px-3 py-1.5 rounded-md text-sm font-medium transition-all flex items-center gap-2">
                    <i class="fa-solid fa-border-all"></i> Grid
                </button>
                <button @click="view = 'list'" :class="{'bg-white shadow text-primary': view === 'list', 'text-gray-500 hover:text-gray-700': view !== 'list'}" class="px-3 py-1.5 rounded-md text-sm font-medium transition-all flex items-center gap-2">
                    <i class="fa-solid fa-list"></i> List
                </button>
            </div>
        </div>

        <!-- Job Cards Grid -->
        <div :class="{'grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6': view === 'grid', 'flex flex-col gap-4': view === 'list'}" class="mb-8">
            
            <!-- Job Card 1 (Expiring Soon & Highly Matched) -->
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-primary/50 hover:shadow-lg transition-all duration-300 group flex flex-col relative">
                <!-- Ribbon -->
                <div class="absolute -right-12 top-6 bg-red-500 text-white text-[10px] font-bold uppercase tracking-wider py-1 px-12 rotate-45 shadow-sm z-10 pointer-events-none">
                    Expiring
                </div>
                
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl border border-gray-100 p-2 bg-white shadow-sm shrink-0 flex items-center justify-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors line-clamp-1">Senior Product Designer</h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-sm font-medium text-gray-700">Google</span>
                                    <span class="text-gray-300">•</span>
                                    <div class="flex items-center text-amber-400 text-xs">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                        <span class="text-gray-500 ml-1 font-medium">4.8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 mb-4">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-600 ring-1 ring-inset ring-emerald-600/20">
                            <i class="fa-solid fa-bullseye"></i> 95% Match
                        </span>
                        <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Full-time</span>
                    </div>

                    <div class="grid grid-cols-2 gap-y-3 gap-x-2 text-sm text-gray-600 mb-5">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot w-4 text-center text-gray-400"></i>
                            <span class="truncate">Mountain View, CA</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-money-bill-wave w-4 text-center text-gray-400"></i>
                            <span class="truncate">$150k - $200k</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-briefcase w-4 text-center text-gray-400"></i>
                            <span class="truncate">5+ Years</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-house-laptop w-4 text-center text-gray-400"></i>
                            <span class="truncate">Hybrid</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">Figma</span>
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">UI/UX</span>
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">Prototyping</span>
                    </div>
                </div>
                
                <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/50 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-red-500 font-bold flex items-center"><i class="fa-regular fa-clock mr-1"></i> Ends in 2 days</span>
                        <span class="text-[10px] text-gray-400 mt-0.5">Saved 12 days ago</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="w-9 h-9 rounded-lg border border-gray-200 bg-white text-gray-400 hover:text-red-500 hover:border-red-200 hover:bg-red-50 flex items-center justify-center transition-colors" title="Remove from saved">
                            <i class="fa-solid fa-bookmark"></i>
                        </button>
                        <x-ui.button size="sm" variant="primary">Apply Now</x-ui.button>
                    </div>
                </div>
            </div>

            <!-- Job Card 2 (Recently Saved) -->
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-primary/50 hover:shadow-lg transition-all duration-300 group flex flex-col relative">
                <!-- Ribbon -->
                <div class="absolute -right-12 top-6 bg-primary text-white text-[10px] font-bold uppercase tracking-wider py-1 px-12 rotate-45 shadow-sm z-10 pointer-events-none">
                    New
                </div>

                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl border border-gray-100 p-2 bg-white shadow-sm shrink-0 flex items-center justify-center">
                                <i class="fa-brands fa-stripe text-3xl text-[#635BFF]"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors line-clamp-1">Frontend Engineer</h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-sm font-medium text-gray-700">Stripe</span>
                                    <span class="text-gray-300">•</span>
                                    <div class="flex items-center text-amber-400 text-xs">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                        <span class="text-gray-500 ml-1 font-medium">4.1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 mb-4">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-600 ring-1 ring-inset ring-emerald-600/20">
                            <i class="fa-solid fa-bullseye"></i> 88% Match
                        </span>
                        <span class="inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">Remote</span>
                    </div>

                    <div class="grid grid-cols-2 gap-y-3 gap-x-2 text-sm text-gray-600 mb-5">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot w-4 text-center text-gray-400"></i>
                            <span class="truncate">Anywhere (US)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-money-bill-wave w-4 text-center text-gray-400"></i>
                            <span class="truncate">$130k - $170k</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-briefcase w-4 text-center text-gray-400"></i>
                            <span class="truncate">3+ Years</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-clock w-4 text-center text-gray-400"></i>
                            <span class="truncate">Full-time</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">React</span>
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">TypeScript</span>
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">Tailwind</span>
                    </div>
                </div>
                
                <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/50 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500 font-medium">Ends in 24 days</span>
                        <span class="text-[10px] text-primary font-semibold mt-0.5">Saved today</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="w-9 h-9 rounded-lg border border-gray-200 bg-white text-gray-400 hover:text-red-500 hover:border-red-200 hover:bg-red-50 flex items-center justify-center transition-colors" title="Remove from saved">
                            <i class="fa-solid fa-bookmark"></i>
                        </button>
                        <x-ui.button size="sm" variant="primary">Apply Now</x-ui.button>
                    </div>
                </div>
            </div>

            <!-- Job Card 3 (Normal) -->
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-primary/50 hover:shadow-lg transition-all duration-300 group flex flex-col relative">
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl border border-gray-100 p-2 bg-white shadow-sm shrink-0 flex items-center justify-center">
                                <i class="fa-brands fa-aws text-3xl text-[#FF9900]"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors line-clamp-1">Cloud Architect</h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-sm font-medium text-gray-700">Amazon AWS</span>
                                    <span class="text-gray-300">•</span>
                                    <div class="flex items-center text-amber-400 text-xs">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                        <span class="text-gray-500 ml-1 font-medium">4.5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 mb-4">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-bold text-amber-600 ring-1 ring-inset ring-amber-600/20">
                            <i class="fa-solid fa-bullseye"></i> 74% Match
                        </span>
                        <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Full-time</span>
                    </div>

                    <div class="grid grid-cols-2 gap-y-3 gap-x-2 text-sm text-gray-600 mb-5">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot w-4 text-center text-gray-400"></i>
                            <span class="truncate">Seattle, WA</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-money-bill-wave w-4 text-center text-gray-400"></i>
                            <span class="truncate">$180k - $220k</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-briefcase w-4 text-center text-gray-400"></i>
                            <span class="truncate">7+ Years</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-building w-4 text-center text-gray-400"></i>
                            <span class="truncate">On-site</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">AWS</span>
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">Architecture</span>
                        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 border border-gray-200">Python</span>
                    </div>
                </div>
                
                <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/50 flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500 font-medium">Ends in 15 days</span>
                        <span class="text-[10px] text-gray-400 mt-0.5">Saved 5 days ago</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="w-9 h-9 rounded-lg border border-gray-200 bg-white text-gray-400 hover:text-red-500 hover:border-red-200 hover:bg-red-50 flex items-center justify-center transition-colors" title="Remove from saved">
                            <i class="fa-solid fa-bookmark"></i>
                        </button>
                        <x-ui.button size="sm" variant="primary">Apply Now</x-ui.button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 rounded-xl shadow-sm mb-12">
            <div class="flex flex-1 justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center rounded-md border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-semibold text-gray-900">1</span> to <span class="font-semibold text-gray-900">3</span> of <span class="font-semibold text-gray-900">24</span> saved jobs
                    </p>
                </div>
                <div>
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <i class="fa-solid fa-chevron-left w-4 h-4 text-center"></i>
                        </a>
                        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-200 focus:outline-offset-0">...</span>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">8</a>
                        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <i class="fa-solid fa-chevron-right w-4 h-4 text-center"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Empty State Placeholder (hidden by default) -->
        <div class="hidden bg-white rounded-2xl border border-gray-200 py-16 px-6 text-center shadow-sm">
            <div class="w-24 h-24 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fa-regular fa-bookmark text-4xl text-primary"></i>
            </div>
            <h2 class="text-xl font-bold text-gray-900 mb-2">No saved jobs yet</h2>
            <p class="text-gray-500 max-w-md mx-auto mb-8 text-sm">You haven't bookmarked any jobs. Start browsing and save jobs you're interested in to apply later.</p>
            <x-ui.button variant="primary" icon="fa-solid fa-magnifying-glass">Browse Available Jobs</x-ui.button>
        </div>

    </div>
</x-layouts.dashboard>
