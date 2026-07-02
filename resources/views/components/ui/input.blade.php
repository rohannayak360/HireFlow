@props([
    'disabled' => false,
    'type' => 'text',
    'icon' => null,
    'label' => null,
])

<div class="w-full group/input">
    @if($label)
        <label class="block text-sm font-semibold text-gray-700 mb-1.5 group-focus-within/input:text-primary transition-colors">{{ $label }}</label>
    @endif
    <div class="relative rounded-xl shadow-sm">
        @if($icon)
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                <i class="{{ $icon }} text-gray-400 group-focus-within/input:text-primary transition-colors"></i>
            </div>
        @endif
        
        @php
            $padding = $type === 'textarea' ? 'px-4 py-3' : 'px-4 py-2.5';
            $baseClasses = "block w-full {$padding} rounded-xl border border-gray-200 bg-white shadow-sm hover:border-gray-300 focus:bg-white text-gray-900 placeholder-gray-400 focus:border-primary focus:ring-2 focus:ring-primary/20 sm:text-sm transition-all duration-200 outline-none" . ($icon ? ' pl-11' : '');
        @endphp

        @if($type === 'textarea')
            <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $baseClasses]) !!}>{{ $slot }}</textarea>
        @elseif($type === 'select')
            @php
                $selectClasses = $baseClasses . " cursor-pointer appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%239ca3af%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-[length:10px_10px] bg-no-repeat bg-[position:right_1rem_center]";
            @endphp
            <select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $selectClasses]) !!}>
                {{ $slot }}
            </select>
        @else
            <input {{ $disabled ? 'disabled' : '' }} type="{{ $type }}" {!! $attributes->merge(['class' => $baseClasses]) !!}>
        @endif
    </div>
</div>
