<x-layouts.auth title="Create an account">
    <div class="flex flex-col md:flex-row h-full w-full">
        <!-- Left Section (45%) -->
        <x-auth.branding-panel 
            heading="Start Your Career Journey" 
            description="Create an account and connect with top companies to find your dream job." 
        />

        <!-- Subtle Gradient Separator -->
        <div class="hidden md:block w-px bg-gradient-to-b from-transparent via-white/20 to-transparent my-6"></div>

        <!-- Right Section (55%) -->
        <div class="w-full md:flex-1 p-6 lg:p-8 flex flex-col justify-center relative">
            <!-- Slight white overlay to make form more readable against glass -->
            <div class="absolute inset-0 bg-white/10 rounded-r-[2rem] hidden md:block"></div>
            
            <div class="relative z-10">
                <h2 class="text-2xl font-bold tracking-tight text-white mb-1">Create Account</h2>
                <p class="text-sm text-white/70 font-medium tracking-wide mb-4">Join HireFlow today and find your dream career.</p>
                
                <form class="space-y-4" action="#" method="POST">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-white mb-1">Full Name</label>
                            <div class="relative group">
                                <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                    <i class="fas fa-user text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                                </div>
                                <input id="name" name="name" type="text" autocomplete="name" required 
                                    class="block w-full rounded-xl border-0 py-2.5 pl-12 pr-4 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all" 
                                    placeholder="John Doe">
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-sm font-medium leading-6 text-white mb-1">Phone Number</label>
                            <div class="relative group">
                                <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                    <i class="fas fa-phone text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                                </div>
                                <input id="phone" name="phone" type="tel" autocomplete="tel" required 
                                    class="block w-full rounded-xl border-0 py-2.5 pl-12 pr-4 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all" 
                                    placeholder="+1 234 567 890">
                            </div>
                        </div>
                    </div>

                    <!-- Email Address -->
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

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium leading-6 text-white mb-1">Password</label>
                            <div class="relative group">
                                <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                    <i class="fas fa-lock text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                                </div>
                                <input type="password" id="password" name="password" required 
                                    class="block w-full rounded-xl border-0 py-2.5 pl-12 pr-12 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all"
                                    placeholder="Password">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="button" onclick="togglePasswordVisibility('password')" class="p-1 text-gray-600 hover:text-blue-600 focus:outline-none transition-colors rounded-lg" tabindex="-1">
                                        <i class="fas fa-eye" id="toggle-icon-password"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium leading-6 text-white mb-1">Confirm Password</label>
                            <div class="relative group">
                                <div class="absolute z-10 inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                    <i class="fas fa-lock text-white/50 group-focus-within:text-blue-400 transition-colors"></i>
                                </div>
                                <input type="password" id="password_confirmation" name="password_confirmation" required 
                                    class="block w-full rounded-xl border-0 py-2.5 pl-12 pr-12 text-gray-900 shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-500 bg-white/80 backdrop-blur-md focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6 transition-all"
                                    placeholder="Confirm">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="button" onclick="togglePasswordVisibility('password_confirmation')" class="p-1 text-gray-600 hover:text-blue-600 focus:outline-none transition-colors rounded-lg" tabindex="-1">
                                        <i class="fas fa-eye" id="toggle-icon-password_confirmation"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center pt-2">
                        <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 rounded border-white/30 text-blue-500 focus:ring-blue-500 bg-white/20 cursor-pointer transition-colors hover:border-blue-300 shadow-sm">
                        <label for="terms" class="ml-2 block text-sm leading-6 text-white cursor-pointer select-none">
                            I agree to the <a href="#" class="text-blue-300 hover:text-blue-200 underline">Terms & Conditions</a>
                        </label>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="flex w-full justify-center items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:from-blue-500 hover:to-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-all duration-300 hover:shadow-[0_0_20px_rgba(59,130,246,0.4)] hover:-translate-y-0.5 group border border-white/10">
                            <span>Create Account</span>
                            <i class="fas fa-arrow-right text-xs opacity-70 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                        </button>
                    </div>
                </form>

                <div class="mt-4">
                    <x-auth.social-login />
                </div>

                <p class="mt-4 text-center text-sm text-white/70 font-medium">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-semibold text-blue-300 hover:text-blue-200 transition-colors ml-1">Sign In</a>
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
