@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="text-sm self-start">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="font-bold group-hover:text-cyan-600 transition-colors duration-300 text-xl">
            <a target="_blank" href="{{ $job->url }}">{{ $job->title }}</a>
        </h3>
        <p class="text-sm mt-4">Full Time - From {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)    
                <x-tag size="small" :$tag />
            @endforeach
        </div>

        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</x-panel>
