@props(['delayClass' => '', 'class' => 'p-3'])

<div class="floating-element {{ $delayClass }} glass-panel rounded-2xl {{ $class }} w-auto min-w-[200px]">
    {{ $slot }}
</div>
