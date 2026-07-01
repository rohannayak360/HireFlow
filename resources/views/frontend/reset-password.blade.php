<x-layouts.auth title="Reset Password">
    <div class="flex flex-col md:flex-row h-full w-full">
        <!-- Left Section (45%) -->
        <x-auth.branding-panel 
            heading="Create New Password" 
            description="Your new password must be different from previous used passwords. Make it strong and secure." 
        />

        <!-- Subtle Gradient Separator -->
        <div class="hidden md:block w-px bg-gradient-to-b from-transparent via-white/20 to-transparent my-6"></div>

        <!-- Right Section (55%) -->
        <div class="w-full md:flex-1 p-6 lg:p-8 flex flex-col justify-center relative">
            <!-- Slight white overlay to make form more readable against glass -->
            <div class="absolute inset-0 bg-white/10 rounded-r-[2rem] hidden md:block"></div>
            
            <div class="relative z-10 max-w-md mx-auto w-full">
                <!-- Icon -->
                <div class="w-12 h-12 bg-green-500/20 rounded-2xl flex items-center justify-center mb-6 border border-green-400/30 shadow-inner">
                    <i class="fas fa-shield-alt text-green-300 text-xl"></i>
                </div>
                
                <h2 class="text-2xl font-bold tracking-tight text-white mb-2">Set New Password</h2>
                <p class="text-sm text-white/70 font-medium tracking-wide mb-6 leading-relaxed">Please enter your new password below to securely regain access to your account.</p>
                
                <form class="space-y-6" action="#" method="POST">
                    @csrf
                    
                    <!-- Hidden inputs usually needed for password reset -->
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">
                    <input type="hidden" name="email" value="{{ request()->email }}">

                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-white mb-2">New Password</label>
                        <div class="relative group">
                            <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <i class="fas fa-lock text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                            </div>
                            <input type="password" id="password" name="password" required 
                                class="block w-full rounded-xl border-0 py-3 pl-12 pr-12 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all"
                                placeholder="Enter new password">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <button type="button" onclick="togglePasswordVisibility('password')" class="p-1 text-gray-600 hover:text-blue-600 focus:outline-none transition-colors rounded-lg" tabindex="-1">
                                    <i class="fas fa-eye" id="toggle-icon-password"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-white mb-2">Confirm New Password</label>
                        <div class="relative group">
                            <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <i class="fas fa-lock text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                            </div>
                            <input type="password" id="password_confirmation" name="password_confirmation" required 
                                class="block w-full rounded-xl border-0 py-3 pl-12 pr-12 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all"
                                placeholder="Confirm new password">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <button type="button" onclick="togglePasswordVisibility('password_confirmation')" class="p-1 text-gray-600 hover:text-blue-600 focus:outline-none transition-colors rounded-lg" tabindex="-1">
                                    <i class="fas fa-eye" id="toggle-icon-password_confirmation"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="flex w-full justify-center items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-4 py-3.5 text-sm font-semibold text-white shadow-md hover:from-blue-500 hover:to-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.4)] hover:-translate-y-0.5 group border border-white/10">
                            <span>Reset Password</span>
                            <i class="fas fa-check-circle text-xs opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
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
    
    <script>
        if (typeof togglePasswordVisibility !== 'function') {
            function togglePasswordVisibility(inputId) {
                const input = document.getElementById(inputId);
                const icon = document.getElementById('toggle-icon-' + inputId);
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            }
        }
    </script>
</x-layouts.auth>
