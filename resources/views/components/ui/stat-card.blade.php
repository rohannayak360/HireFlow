@props([
    'title',
    'value',
    'icon',
    'color' => 'primary',
    'trend' => null, // e.g., '+12%', '-2%'
    'trendLabel' => 'vs last month',
    'progress' => null, // e.g., '75'
])

@php
    $colorClasses = [
        'primary' => 'text-primary bg-primary/10 ring-primary/20',
        'success' => 'text-emerald-600 bg-emerald-50 ring-emerald-200',
        'warning' => 'text-amber-600 bg-amber-50 ring-amber-200',
        'danger' => 'text-rose-600 bg-rose-50 ring-rose-200',
        'info' => 'text-blue-600 bg-blue-50 ring-blue-200',
        'purple' => 'text-purple-600 bg-purple-50 ring-purple-200',
    ];
    
    $progressColors = [
        'primary' => 'bg-primary',
        'success' => 'bg-emerald-500',
        'warning' => 'bg-amber-500',
        'danger' => 'bg-rose-500',
        'info' => 'bg-blue-500',
        'purple' => 'bg-purple-500',
    ];
    
    $activeColorClass = $colorClasses[$color] ?? $colorClasses['primary'];
    $activeProgressClass = $progressColors[$color] ?? $progressColors['primary'];
@endphp

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 sm:p-6 hover:shadow-md hover:border-{{ $color === 'primary' ? 'primary/30' : ($color === 'success' ? 'emerald-300' : ($color === 'warning' ? 'amber-300' : 'blue-300')) }} transition-all duration-300 relative overflow-hidden group transform hover:-translate-y-1">
    <!-- Decorative background glow -->
    <div class="absolute -right-8 -top-8 w-32 h-32 rounded-full bg-gradient-to-br from-transparent to-gray-50 group-hover:scale-150 group-hover:opacity-70 opacity-30 transition-all duration-500 ease-in-out z-0"></div>

    <div class="relative z-10">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500 truncate group-hover:text-gray-700 transition-colors">{{ $title }}</p>
                <div class="mt-2 flex items-baseline gap-2">
                    <p class="text-2xl font-bold text-gray-900 tracking-tight">{{ $value }}</p>
                    
                    @if($trend)
                        @php
                            $isPositive = str_starts_with($trend, '+');
                            $trendColor = $isPositive ? 'text-emerald-600' : 'text-rose-600';
                            $trendIcon = $isPositive ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down';
                        @endphp
                        <p class="text-xs font-semibold {{ $trendColor }} flex items-center bg-gray-50 px-1.5 py-0.5 rounded-md group-hover:bg-white transition-colors">
                            <i class="fa-solid {{ $trendIcon }} mr-1" style="font-size: 0.6rem;"></i>
                            {{ $trend }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div class="flex items-center justify-center w-12 h-12 rounded-xl {{ $activeColorClass }} ring-1 ring-inset shadow-sm flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                <i class="{{ $icon }} text-xl"></i>
            </div>
        </div>
        
        @if($progress)
            <div class="mt-4 w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                <div class="{{ $activeProgressClass }} h-1.5 rounded-full transition-all duration-1000 ease-out" style="width: {{ $progress }}%"></div>
            </div>
        @elseif($trend && $trendLabel)
            <p class="mt-3 text-xs text-gray-400 group-hover:text-gray-500 transition-colors">{{ $trendLabel }}</p>
        @endif
    </div>
</div>
