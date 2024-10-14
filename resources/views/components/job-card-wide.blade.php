@props(['job'])

<x-panel class="flex gap-x-6 mt-6 p-4 align-center">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">{{$job->employer->name}}</a>
        <h3 class="mt-auto text-xl font-bold group-hover:text-blue-800 transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-xs text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>
    <div class="flex flex-col">
        <div class="mt-auto">
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag"></x-tag>
            @endforeach

        </div>
    </div>
</x-panel>
