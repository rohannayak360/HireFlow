@props(['title', 'subtitle'])

<div class="sm:mx-auto sm:w-full sm:max-w-md mb-8 text-center">
    <a href="{{ url('/') }}" class="inline-flex items-center justify-center mb-6 group">
        <!-- Logo Icon -->
        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-blue-500/30 transition-all duration-300">
            <i class="fas fa-briefcase text-white text-lg"></i>
        </div>
        <!-- Logo Text -->
        <span class="ml-3 text-2xl font-bold tracking-tight text-gray-900">HireFlow</span>
    </a>
    
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 mb-2">{{ $title }}</h2>
    <p class="text-sm text-gray-500 font-medium tracking-wide uppercase">Your next opportunity starts here.</p>
</div>
