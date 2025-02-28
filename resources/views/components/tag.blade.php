@props(['size' => 'base', 'tag'])

@php
    $classes = 'inline-block bg-white/10 hover:bg-white/25 transition-colors duration-300 rounded-full font-bold';
    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-tiny';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}"
                href="#">{{ $tag->name }}</a>