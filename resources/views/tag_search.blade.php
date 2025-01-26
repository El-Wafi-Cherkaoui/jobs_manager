<x-layout title="Results : {{request('tag')->title}}">
    <section>
        <x-header>Related Jobs to {{request('tag')->title}}:</x-header>
        <div class="grid lg:grid-cols-3 gap-5 mt-5">
            @foreach ($jobs as $job)
                <x-job_card :$job/>
            @endforeach
        </div>
    </section>
</x-layout>
