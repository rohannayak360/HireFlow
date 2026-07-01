<x-layouts.auth title="Forgot Password">
    <div class="flex flex-col md:flex-row h-full w-full">
        <!-- Left Section (45%) -->
        <x-auth.branding-panel 
            heading="Reset Your Password" 
            description="Don't worry, we'll help you get back into your account. Enter your email to receive a password reset link." 
        />

        <!-- Subtle Gradient Separator -->
        <div class="hidden md:block w-px bg-gradient-to-b from-transparent via-white/20 to-transparent my-6"></div>

        <!-- Right Section (55%) -->
        <div class="w-full md:flex-1 p-6 lg:p-8 flex flex-col justify-center relative">
            <!-- Slight white overlay to make form more readable against glass -->
            <div class="absolute inset-0 bg-white/10 rounded-r-[2rem] hidden md:block"></div>
            
            <div class="relative z-10 max-w-md mx-auto w-full">
                <!-- Icon -->
                <div class="w-12 h-12 bg-blue-500/20 rounded-2xl flex items-center justify-center mb-6 border border-blue-400/30 shadow-inner">
                    <i class="fas fa-key text-blue-300 text-xl"></i>
                </div>
                
                <h2 class="text-2xl font-bold tracking-tight text-white mb-2">Forgot Password?</h2>
                <p class="text-sm text-white/70 font-medium tracking-wide mb-6 leading-relaxed">Enter the email address associated with your account and we'll send you a link to reset your password.</p>
                
                <form class="space-y-6" action="#" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-white mb-2">Email address</label>
                        <div class="relative group">
                            <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <i class="fas fa-envelope text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required 
                                class="block w-full rounded-xl border-0 py-3 pl-12 pr-4 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all" 
                                placeholder="you@example.com">
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="flex w-full justify-center items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:from-blue-500 hover:to-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.4)] hover:-translate-y-0.5 group border border-white/10">
                            <span>Send Reset Link</span>
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
