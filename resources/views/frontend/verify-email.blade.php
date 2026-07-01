<x-layouts.auth title="Verify Email">
    <div class="flex flex-col md:flex-row h-full w-full">
        <!-- Left Section (45%) -->
        <x-auth.branding-panel 
            heading="Verify Your Email" 
            description="You're almost there! We've sent a verification link to your email address to ensure your account is secure." 
        />

        <!-- Subtle Gradient Separator -->
        <div class="hidden md:block w-px bg-gradient-to-b from-transparent via-white/20 to-transparent my-6"></div>

        <!-- Right Section (55%) -->
        <div class="w-full md:flex-1 p-6 lg:p-8 flex flex-col justify-center relative">
            <div class="absolute inset-0 bg-white/10 rounded-r-[2rem] hidden md:block"></div>
            
            <div class="relative z-10 max-w-md mx-auto w-full">
                <!-- Icon -->
                <div class="w-12 h-12 bg-blue-500/20 rounded-2xl flex items-center justify-center mb-6 border border-blue-400/30 shadow-inner">
                    <i class="fas fa-envelope-open-text text-blue-300 text-xl"></i>
                </div>
                
                <h2 class="text-2xl font-bold tracking-tight text-white mb-2">Check your inbox</h2>
                <p class="text-sm text-white/70 font-medium tracking-wide mb-6 leading-relaxed">
                    Thanks for signing up! Before getting started, please verify your email address by clicking on the link we just emailed to you. If you didn't receive the email, we will gladly send you another.
                </p>
                
                <form class="space-y-6" action="#" method="POST">
                    @csrf
                    <div class="pt-2">
                        <button type="submit" class="flex w-full justify-center items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:from-blue-500 hover:to-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.4)] hover:-translate-y-0.5 group border border-white/10">
                            <span>Resend Verification Email</span>
                            <i class="fas fa-paper-plane text-xs opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-white/80 hover:text-white transition-colors group">
                        <i class="fas fa-arrow-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                        Back to Sign In
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.auth>
