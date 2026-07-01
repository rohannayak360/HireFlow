<div class="particles-container">
    <!-- Blurred Blobs for depth -->
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>

    <!-- Career Network Canvas -->
    <canvas id="networkCanvas"></canvas>

    <!-- Refined Particles -->
    @for ($i = 0; $i < 40; $i++)
        <div class="particle" style="left: {{ rand(2, 98) }}%; width: {{ rand(2, 6) }}px; height: {{ rand(2, 6) }}px; animation-duration: {{ rand(20, 45) }}s; animation-delay: -{{ rand(0, 30) }}s;"></div>
    @endfor

    <!-- Floating Cards (Varied Content) -->
    
    <!-- Match Score Card -->
    <div class="absolute hidden xl:block z-0" style="top: 10%; left: 2%;">
        <x-auth.floating-card delayClass="">
            <div class="flex items-center space-x-3">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-500/20 border border-green-400/30 flex items-center justify-center">
                    <span class="text-green-400 font-bold text-sm">98%</span>
                </div>
                <div>
                    <h4 class="text-white text-sm font-semibold">Match Score</h4>
                    <p class="text-white/60 text-xs">Senior UI Developer</p>
                </div>
            </div>
        </x-auth.floating-card>
    </div>
    
    <!-- Active Jobs Stat Card -->
    <div class="absolute hidden xl:block z-0" style="bottom: 12%; left: 3%;">
        <x-auth.floating-card delayClass="delay-1" class="px-5 py-4">
            <div class="flex flex-col items-start">
                <div class="flex items-center space-x-2 mb-1">
                    <div class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></div>
                    <span class="text-blue-300 text-xs font-medium uppercase tracking-wider">Live Now</span>
                </div>
                <h4 class="text-white text-2xl font-bold tracking-tight">12,450+</h4>
                <p class="text-white/70 text-xs mt-1">Active jobs worldwide</p>
            </div>
        </x-auth.floating-card>
    </div>

    <!-- Company Hiring Card -->
    <div class="absolute hidden xl:block z-0" style="top: 20%; right: 2%;">
        <x-auth.floating-card delayClass="delay-2">
            <div class="flex items-center space-x-3">
                <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-inner">
                    <i class="fab fa-apple text-gray-900 text-xl"></i>
                </div>
                <div>
                    <h4 class="text-white text-sm font-semibold">Apple</h4>
                    <p class="text-green-400 text-xs font-medium">Actively Hiring <i class="fas fa-check-circle ml-1"></i></p>
                </div>
            </div>
        </x-auth.floating-card>
    </div>

    <!-- Candidate Application Card -->
    <div class="absolute hidden xl:block z-0" style="bottom: 15%; right: 3%;">
        <x-auth.floating-card delayClass="delay-3">
            <div class="flex items-center space-x-3">
                <div class="flex-shrink-0 relative">
                    <img class="w-10 h-10 rounded-full border-2 border-white/20 object-cover" src="https://i.pravatar.cc/100?img=33" alt="Candidate">
                    <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-blue-500 rounded-full border-2 border-slate-900 flex items-center justify-center">
                        <i class="fas fa-briefcase text-[8px] text-white"></i>
                    </div>
                </div>
                <div>
                    <h4 class="text-white text-sm font-semibold">Application Sent</h4>
                    <p class="text-white/60 text-xs">Just now</p>
                </div>
            </div>
        </x-auth.floating-card>
    </div>
</div>
