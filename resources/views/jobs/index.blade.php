<x-layout title="Jobs Management">

    <section class="flex flex-col justify-center items-center gap-5 p-5">
        <h1 class="text-4xl text-center text-dwhite">Find Job</h1>

        <form action="/search" method="get" class="w-full flex flex-col justify-center items-center gap-2">
            <input name="search_inp" class="py-2 px-4 w-full max-w-xl rounded-xl focus:rounded-2xl focus:outline-none border-4 transition-all duration-300 focus:border-dorange" type="search" placeholder="e-commerce project..." class="">
        </form>

    </section>

    <section>
        <x-header>Top Jobs :</x-header>
        <div class="grid lg:grid-cols-3 gap-5 mt-5">
            @foreach ($jobs as $job)
                <x-job_card :$job/>
            @endforeach
        </div>
    </section>

    <section>
        <x-header>Recent Jobs :</x-header>
        <div class="mt-5 space-y-5">
            @foreach ($jobs as $job)
                <x-job_card_expand :$job></x-job_card_expand>
            @endforeach
        </div>
    </section>

    <section>
        <x-header>Tags :</x-header>
        <div class="space-x-1 mt-5">
            @foreach ($tags as $tag)
                <x-tag_comp size="large" :$tag />
            @endforeach
        </div>
    </section>
</x-layout>


