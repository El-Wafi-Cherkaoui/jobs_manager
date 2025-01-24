<x-layout title="Jobs Management">
    <section class="flex flex-col justify-center items-center gap-5 p-5">
        <h1 class="text-4xl text-center text-dwhite">Find Job</h1>
        <form action="" method="post" class="w-full flex flex-col justify-center items-center gap-2">
            <input class="py-2 px-4 w-full max-w-xl rounded-xl focus:rounded-2xl focus:outline-none border-4 transition-all duration-300 focus:border-dorange" type="search" placeholder="e-commerce project..." class="">
        </form>
    </section>
    <section>
        <x-header>Top Jobs :</x-header>
        <div class="grid lg:grid-cols-3 gap-5 mt-5">
            <x-job_card></x-job_card>
            <x-job_card></x-job_card>
            <x-job_card></x-job_card>
        </div>
    </section>

    <section>
        <x-header>Recent Jobs :</x-header>
        <div class="mt-5 space-y-5">
            <x-job_card_expand></x-job_card_expand>
            <x-job_card_expand></x-job_card_expand>
            <x-job_card_expand></x-job_card_expand>
        </div>
    </section>

    <section>
        <x-header>Tags :</x-header>
        <div class="space-x-1 mt-5">
            <x-tag size="large">Tag#1</x-tag>
            <x-tag size="large">Tag#2</x-tag>
            <x-tag size="large">Tag#3</x-tag>
        </div>
    </section>
</x-layout>


