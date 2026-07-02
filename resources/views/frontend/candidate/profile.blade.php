<x-layouts.dashboard title="My Profile">
    <div class="w-full">
        <!-- Breadcrumbs -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-gray-500">
                <li><a href="{{ route('candidate.dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="font-medium text-gray-900" aria-current="page">My Profile</li>
            </ol>
        </nav>

        <!-- Header (Cover + Avatar + Basic Details) -->
        @include('frontend.candidate.partials.profile.header')

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 relative items-stretch">
            
            <!-- Left Column (Main Details) -->
            <div class="lg:col-span-2 space-y-6 lg:space-y-8">
                <!-- Personal Info -->
                @include('frontend.candidate.partials.profile.personal-info')

                <!-- Professional Info -->
                @include('frontend.candidate.partials.profile.professional-info')

                <!-- Experience -->
                @include('frontend.candidate.partials.profile.experience')

                <!-- Education -->
                @include('frontend.candidate.partials.profile.education')
                
                <!-- Skills -->
                @include('frontend.candidate.partials.profile.skills')

                <!-- Certifications -->
                @include('frontend.candidate.partials.profile.certifications')

                <!-- Portfolio Links -->
                @include('frontend.candidate.partials.profile.portfolio')
                
                <!-- Social Links -->
                @include('frontend.candidate.partials.profile.social-links')
            </div>

            <!-- Right Column (Sticky Sidebar Widgets) -->
            <div class="lg:col-span-1 relative">
                <div class="space-y-6 sticky top-8 sm:top-24 pb-8">
                    
                    <!-- Resume Section -->
                    @include('frontend.candidate.partials.profile.resume')
                    
                    <!-- Profile Strength Widget -->
                    <x-ui.card title="Profile Completion">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-900">Intermediate</span>
                            <span class="text-sm font-bold text-primary">75%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2 mb-4 overflow-hidden">
                            <div class="bg-primary h-2 rounded-full transition-all duration-1000 ease-out" style="width: 75%"></div>
                        </div>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-start gap-2 text-gray-500">
                                <i class="fa-solid fa-circle-check text-emerald-500 mt-0.5"></i> Basic Information
                            </li>
                            <li class="flex items-start gap-2 text-gray-500">
                                <i class="fa-solid fa-circle-check text-emerald-500 mt-0.5"></i> Work Experience
                            </li>
                            <li class="flex items-start gap-2 text-gray-900 font-medium group cursor-pointer hover:text-primary transition-colors">
                                <i class="fa-regular fa-circle text-gray-300 mt-0.5 group-hover:text-primary"></i> Add Certifications <span class="text-xs text-primary font-bold ml-auto">+10%</span>
                            </li>
                        </ul>
                    </x-ui.card>
                    
                    <!-- Recruiter Activity -->
                    <x-ui.card title="Recruiter Activity">
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-900">TechNova Inc.</h4>
                                    <p class="text-xs text-gray-500">Viewed your profile yesterday</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-download text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-900">Creative Studio</h4>
                                    <p class="text-xs text-gray-500">Downloaded your resume</p>
                                </div>
                            </div>
                        </div>
                    </x-ui.card>
                    
                    <!-- Career Tips Widget -->
                    <x-ui.card title="Career Tips" class="bg-gradient-to-b from-white to-gray-50/50">
                        <x-slot:headerActions>
                            <button class="text-gray-400 hover:text-primary transition-colors"><i class="fa-solid fa-arrows-rotate text-sm"></i></button>
                        </x-slot:headerActions>
                        
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
                    </x-ui.card>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
