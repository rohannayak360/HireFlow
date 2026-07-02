@props([
    'variant' => 'primary', // primary, secondary, outline, danger
    'size' => 'md', // sm, md, lg
    'icon' => null,
    'type' => 'button',
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed rounded-xl shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 active:shadow-sm';
    
    $variants = [
        'primary' => 'bg-primary text-white hover:bg-primary-hover focus:ring-primary',
        'secondary' => 'bg-white text-gray-700 hover:bg-gray-50 focus:ring-gray-200 border border-gray-200/80 hover:border-gray-300',
        'outline' => 'bg-transparent text-primary border border-primary/20 hover:bg-primary/5 focus:ring-primary',
        'danger' => 'bg-rose-50 text-rose-600 hover:bg-rose-100 focus:ring-rose-200 border border-rose-100',
        'text' => 'bg-transparent text-gray-600 hover:text-primary hover:bg-primary/5 shadow-none hover:shadow-none hover:-translate-y-0 focus:ring-primary',
    ];
    
    $sizes = [
        'sm' => 'px-3.5 py-1.5 text-xs',
        'md' => 'px-5 py-2.5 text-sm',
        'lg' => 'px-7 py-3 text-base',
    ];
    
    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    @if($icon)
        <i class="{{ $icon }} {{ $slot->isEmpty() ? '' : 'mr-2' }}"></i>
    @endif
    {{ $slot }}
</button>
