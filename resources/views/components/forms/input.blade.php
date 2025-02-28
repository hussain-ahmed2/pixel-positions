@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full outline-none focus:ring-2 ring-cyan-600/50 transition-colors duration-300',
        'value' => old($name),
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }} />
</x-forms.field>
