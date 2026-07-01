@props(['heading', 'description'])

<div class="w-full md:w-[45%] p-4 pt-8 md:p-6 lg:p-10 flex flex-col justify-center relative overflow-hidden">
    <!-- Decorative Background Element -->
    <div class="absolute -top-24 -left-24 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl hidden md:block"></div>
    <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-indigo-500/20 rounded-full blur-3xl hidden md:block"></div>
    
    <div class="relative z-10 flex flex-col h-full justify-between">
        <div>
            <!-- Logo -->
            <div class="text-center md:text-left">
                <a href="{{ url('/') }}" class="inline-block mb-2 md:mb-10 group transition-transform hover:scale-105">
                    <img src="{{ asset('frontend/images/our company/websitelogo.png') }}" alt="HireFlow" class="h-10 md:h-12 w-auto drop-shadow-md mx-auto md:mx-0">
                </a>
            </div>
            
            <div class="hidden md:block">
                <h1 class="text-2xl lg:text-3xl font-extrabold tracking-tight text-white mb-2 drop-shadow-sm leading-tight">{{ $heading }}</h1>
                <p class="text-white/80 mb-4 lg:mb-6 font-medium text-sm leading-relaxed">{{ $description }}</p>
            </div>
        </div>
        
        <div class="space-y-3 hidden md:block">
            <div class="flex items-center gap-4 text-white/90">
                <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-300 border border-blue-400/30">
                    <i class="fas fa-briefcase text-sm"></i>
                </div>
                <div>
                    <span class="font-bold text-white">12K+</span>
                    <span class="text-sm">Active Jobs</span>
                </div>
            </div>
            
            <div class="flex items-center gap-4 text-white/90">
                <div class="w-8 h-8 rounded-full bg-purple-500/20 flex items-center justify-center text-purple-300 border border-purple-400/30">
                    <i class="fas fa-building text-sm"></i>
                </div>
                <div>
                    <span class="font-bold text-white">50K+</span>
                    <span class="text-sm">Companies</span>
                </div>
            </div>
            
            <div class="flex items-center gap-4 text-white/90">
                <div class="w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center text-green-300 border border-green-400/30">
                    <i class="fas fa-users text-sm"></i>
                </div>
                <div>
                    <span class="font-bold text-white">2M+</span>
                    <span class="text-sm">Candidates</span>
                </div>
            </div>
        </div>
    </div>
</div>
