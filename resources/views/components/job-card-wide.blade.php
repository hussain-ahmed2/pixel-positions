@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#"
            class="text-sm self-start text-gray-400 group-hover:text-cyan-600 transition-colors duration-300">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3">
            <a target="_blank" href="{{ $job->url }}">{{ $job->title }}</a>
        </h3>
        <p class="mt-auto text-sm text-gray-400">Full Time - From {{ $job->salary }}</p>
    </div>
    <div class="">
        @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag />
        @endforeach
    </div>
</x-panel>
