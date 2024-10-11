<x-layout >
    <x-page-heading class="font-bold text-4xl">Results</x-page-heading>

    <div class="grid lg:grid-cols-3 gap-8">
        @foreach($jobs as $job)
            <x-job-card-wide :$job></x-job-card-wide>
        @endforeach
    </div>
</x-layout>
