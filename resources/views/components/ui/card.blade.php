@props([
    'title' => null,
    'description' => null,
    'padding' => 'p-5 sm:p-6',
    'noPadding' => false
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-[0_2px_10px_-4px_rgba(0,0,0,0.05)] border border-gray-100/80 overflow-hidden transition-all duration-300 hover:shadow-[0_8px_20px_-6px_rgba(0,0,0,0.08)]']) }}>
    @if($title || isset($header))
        <div class="px-5 sm:px-7 py-4 lg:py-5 border-b border-gray-100/80 flex justify-between items-center bg-white">
            <div>
                @if($title)
                    <h3 class="text-base font-bold text-gray-900 tracking-tight">{{ $title }}</h3>
                @endif
                @if($description)
                    <p class="mt-1 text-sm font-medium text-gray-500">{{ $description }}</p>
                @endif
            </div>
            @if(isset($headerActions))
                <div class="ml-4 flex-shrink-0">
                    {{ $headerActions }}
                </div>
            @endif
        </div>
    @endif

    <div class="{{ $noPadding ? '' : $padding }}">
        {{ $slot }}
    </div>
    
    @if(isset($footer))
        <div class="px-5 sm:px-6 py-4 border-t border-gray-100 bg-gray-50/50">
            {{ $footer }}
        </div>
    @endif
</div>
