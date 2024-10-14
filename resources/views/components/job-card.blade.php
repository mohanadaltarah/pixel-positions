@props(['job'])

<x-panel class="flex p-4 flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class=" font-bold group-hover:text-blue-800 text-xl transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm mt-5">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" size="small"></x-tag>
            @endforeach

        </div>
        <x-employer-logo :employer="$job->employer" :width="42"></x-employer-logo>
    </div>
</x-panel>
