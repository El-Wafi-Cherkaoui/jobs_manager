<x-layout title="Jobs Management">
    <section>
        <x-header>Top Jobs :</x-header>
        <div class="grid lg:grid-cols-3 gap-5 mt-5">
            <x-job_card></x-job_card>
            <x-job_card></x-job_card>
            <x-job_card></x-job_card>
        </div>
    </section>

    <section>
        <x-header>Find Jobs :</x-header>
        <div class="mt-5 space-y-5">
            <x-job_card_expand></x-job_card_expand>
            <x-job_card_expand></x-job_card_expand>
            <x-job_card_expand></x-job_card_expand>
        </div>
    </section>

    <section>
        <x-header>Tags :</x-header>
        <div class="space-x-1 mt-5">
            <x-tag>Tag#1</x-tag>
            <x-tag>Tag#2</x-tag>
            <x-tag>Tag#3</x-tag>
        </div>
    </section>
</x-layout>


