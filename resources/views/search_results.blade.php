<x-layout title="Results">
    <section>
        <x-header>Search Results :</x-header>
        <div class="grid lg:grid-cols-3 gap-5 mt-5">
            @foreach ($jobs as $job)
                <x-job_card :$job/>
            @endforeach
        </div>
    </section>
</x-layout>
