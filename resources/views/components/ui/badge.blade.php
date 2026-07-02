@props([
    'color' => 'gray', // primary, success, warning, danger, info, gray
    'dot' => false,
])

@php
    $baseClasses = 'inline-flex items-center rounded-md px-2 py-1 text-xs font-medium ring-1 ring-inset';
    
    $colorClasses = [
        'primary' => 'bg-primary/10 text-primary ring-primary/20',
        'success' => 'bg-emerald-50 text-emerald-700 ring-emerald-600/20',
        'warning' => 'bg-amber-50 text-amber-700 ring-amber-600/20',
        'danger' => 'bg-rose-50 text-rose-700 ring-rose-600/20',
        'info' => 'bg-blue-50 text-blue-700 ring-blue-600/20',
        'gray' => 'bg-gray-50 text-gray-600 ring-gray-500/10',
    ];
    
    $dotColors = [
        'primary' => 'fill-primary',
        'success' => 'fill-emerald-500',
        'warning' => 'fill-amber-500',
        'danger' => 'fill-rose-500',
        'info' => 'fill-blue-500',
        'gray' => 'fill-gray-400',
    ];

    $activeColorClass = $colorClasses[$color] ?? $colorClasses['gray'];
    $activeDotColor = $dotColors[$color] ?? $dotColors['gray'];
@endphp

<span {{ $attributes->merge(['class' => $baseClasses . ' ' . $activeColorClass]) }}>
    @if($dot)
        <svg class="h-1.5 w-1.5 mr-1.5 {{ $activeDotColor }}" viewBox="0 0 6 6" aria-hidden="true">
            <circle cx="3" cy="3" r="3" />
        </svg>
    @endif
    {{ $slot }}
</span>
