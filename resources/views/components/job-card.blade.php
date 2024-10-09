@props(['job'])

<x-panel class="flex p-4 flex-col text-center">
    <div class="self-start text-sm">Sirat</div>
    <div class="py-8">
        <h3 class=" font-bold group-hover:text-blue-800 text-xl transition-colors duration-300">Video Editor</h3>
        <p class="text-sm mt-5">Full-time | $20,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach

        </div>
        <x-employer-logo :width="42"></x-employer-logo>
    </div>
</x-panel>
