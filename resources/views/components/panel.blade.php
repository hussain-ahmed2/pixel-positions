@php
    $classes = 'p-4 bg-white/5 rounded-xl group border border-transparent hover:border-cyan-600 transition-colors duration-300';
@endphp

<div
    {{ $attributes(['class' => $classes])}}>
    {{ $slot }}
</div>
