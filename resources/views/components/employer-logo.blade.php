@props(['employer', 'width' => 90])

<img class="rounded-xl w-22 image-logo" src="{{ asset($employer->logo) }}" alt="" data-name="{{ $employer->name }}">
