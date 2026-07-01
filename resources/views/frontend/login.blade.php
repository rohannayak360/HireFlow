<x-layouts.auth title="Sign in to your account">
    <div class="flex flex-col md:flex-row h-full w-full">
        <!-- Left Section (45%) -->
        <x-auth.branding-panel 
            heading="Welcome to your professional community" 
            description="Find your dream career with HireFlow. Join thousands of professionals growing their careers today." 
        />

        <!-- Subtle Gradient Separator -->
        <div class="hidden md:block w-px bg-gradient-to-b from-transparent via-white/20 to-transparent my-6"></div>

        <!-- Right Section (55%) -->
        <div class="w-full md:flex-1 p-6 lg:p-8 flex flex-col justify-center relative">
            <!-- Slight white overlay to make form more readable against glass -->
            <div class="absolute inset-0 bg-white/10 rounded-r-[2rem] hidden md:block"></div>
            
            <div class="relative z-10">
                <h2 class="text-2xl font-bold tracking-tight text-white mb-1">Welcome Back</h2>
                <p class="text-sm text-white/70 font-medium tracking-wide mb-4">Please enter your details to sign in.</p>
                
                <form class="space-y-4" action="#" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-white mb-1">Email address</label>
                        <div class="relative group">
                            <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <i class="fas fa-envelope text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required 
                                class="block w-full rounded-xl border-0 py-2.5 pl-12 pr-4 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all" 
                                placeholder="you@example.com">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="font-medium text-blue-300 hover:text-blue-200 transition-colors">Forgot password?</a>
                            </div>
                        </div>
                        
                        <div class="relative group">
                            <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <i class="fas fa-lock text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                            </div>
                            
                            <input type="password" id="password" name="password" required 
                                class="block w-full rounded-xl border-0 py-2.5 pl-12 pr-12 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all"
                                placeholder="Enter your password">
                            
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <button type="button" onclick="togglePasswordVisibility('password')" class="p-1 text-gray-600 hover:text-blue-600 focus:outline-none transition-colors rounded-lg" tabindex="-1">
                                    <i class="fas fa-eye" id="toggle-icon-password"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-1">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-white/30 text-blue-500 focus:ring-blue-500 bg-white/20 cursor-pointer transition-colors hover:border-blue-300 shadow-sm">
                            <label for="remember-me" class="ml-2 block text-sm leading-6 text-white cursor-pointer select-none font-medium">Remember me</label>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="flex w-full justify-center items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:from-blue-500 hover:to-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.4)] hover:-translate-y-0.5 group border border-white/10">
                            <span>Sign in</span>
                            <i class="fas fa-arrow-right text-xs opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                        </button>
                    </div>
                </form>

                <div class="mt-4">
                    <x-auth.social-login />
                </div>

                <p class="mt-4 text-center text-sm text-white/70 font-medium">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-semibold text-blue-300 hover:text-blue-200 transition-colors ml-1">Sign up for free</a>
                </p>
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
