@props(['job'])

<x-panel class="flex gap-x-6 mt-6 p-4 align-center">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">Sirat</a>
        <h3 class="mt-auto text-xl font-bold group-hover:text-blue-800 transition-colors duration-300">Video Editor</h3>
        <p class="text-xs text-gray-400 mt-auto">Full-time | $20,000</p>
    </div>
    <div class="flex flex-col">
        <div class="flex ml-auto gap-x-2">
            <x-tag>Location</x-tag>
            <x-tag>Hours</x-tag>
        </div>
        <div class="mt-auto">
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach

        </div>
    </div>
</x-panel>
