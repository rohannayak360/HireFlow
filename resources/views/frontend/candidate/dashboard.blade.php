<x-layouts.dashboard title="Candidate Dashboard">
    
    <!-- Welcome & Profile Completion -->
    <div class="mb-6 lg:mb-8">
        @include('frontend.candidate.partials.welcome')
    </div>

    <!-- Quick Statistics -->
    <div class="mb-6 lg:mb-8">
        @include('frontend.candidate.partials.stats')
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
        
        <!-- Left Column (Applications & Jobs) -->
        <div class="lg:col-span-2 space-y-6 lg:space-y-8">
            <!-- Recent Applications -->
            @include('frontend.candidate.partials.recent-applications')

            <!-- Recommended Jobs -->
            @include('frontend.candidate.partials.recommended-jobs')
        </div>

        <!-- Right Column (Sidebar widgets) -->
        <div class="space-y-6 lg:space-y-8">
            <!-- Upcoming Interviews -->
            @include('frontend.candidate.partials.upcoming-interviews')
            
            <!-- Career Tips Widget -->
            <x-ui.card title="Career Tips" class="bg-gradient-to-b from-white to-gray-50/50">
                <x-slot:headerActions>
                    <button class="text-gray-400 hover:text-primary transition-colors"><i class="fa-solid fa-arrows-rotate text-sm"></i></button>
                </x-slot:headerActions>
                
                <div class="space-y-4">
                    <a href="#" class="group block">
                        <div class="flex gap-3 items-start">
                            <div class="w-10 h-10 rounded-lg bg-orange-50 text-orange-600 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-100 transition-colors">
                                <i class="fa-regular fa-lightbulb"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900 group-hover:text-primary transition-colors leading-tight">Mastering the technical interview</h4>
                                <p class="text-xs text-gray-500 mt-1 line-clamp-2">Learn the top 5 strategies that candidates use to pass system design rounds...</p>
                            </div>
                        </div>
                    </a>
                    
                    <div class="border-t border-gray-100 pt-4">
                        <a href="#" class="group block">
                            <div class="flex gap-3 items-start">
                                <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-100 transition-colors">
                                    <i class="fa-solid fa-pen-nib"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-900 group-hover:text-primary transition-colors leading-tight">Resume keywords for 2026</h4>
                                    <p class="text-xs text-gray-500 mt-1 line-clamp-2">Optimize your ATS score by including these trending industry terms...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </x-ui.card>

            <!-- Complete Profile Prompt Card -->
            <x-ui.card class="bg-gradient-to-br from-primary to-blue-800 text-white border-0 shadow-lg" noPadding="true">
                <div class="p-6 relative overflow-hidden">
                    <!-- Decorative background element -->
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-blue-400 opacity-20 rounded-full blur-xl"></div>
                    
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm mb-4">
                            <i class="fa-solid fa-rocket text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Boost your visibility</h3>
                        <p class="text-blue-100 text-sm mb-5 leading-relaxed">Candidates with complete profiles receive up to 3x more interview invites from top companies.</p>
                        <button class="w-full bg-white text-primary font-semibold py-2.5 px-4 rounded-lg hover:bg-gray-50 transition-colors shadow-sm text-sm">
                            Complete Profile Now
                        </button>
                    </div>
                </div>
            </x-ui.card>
        </div>
        
    </div>

</x-layouts.dashboard>
