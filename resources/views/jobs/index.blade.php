<x-layout>
    <div class="space-y-6">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find you the best job!</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer.." class="w-full rounded-xl bg-white/5 border-white/10 px-5 py-4 max-w-xl ">

            </form>

        </section>
        <section  class="pt-6">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-2">
                @foreach($tags as $tag)
                    <x-tag :tag="$tag"></x-tag>
                @endforeach


            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            @foreach($jobs as $job)
                <x-job-card-wide :$job></x-job-card-wide>
            @endforeach
        </section>
    </div>
</x-layout>
