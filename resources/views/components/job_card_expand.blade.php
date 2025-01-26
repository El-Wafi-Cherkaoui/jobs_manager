@props(["job"])
<div class="bg-dwhite p-4 sm:flex gap-2 rounded-lg group cursor-pointer border-1 border-transparent hover:border-dorange hover:shadow-borderShadow transition-all duration-300 ease-in-out">

    <x-emp_logo :expand="true" />

    <div class="flex flex-col text-center sm:text-left">
        <h5 class="opacity-80 text-sm h-fit">{{$job->employer->name}}</h5>
        <div class="h-full flex flex-col">
            <h3 class="font-bold text-3xl mb-5 group-hover:text-dorange transition-all duration-300">{{$job->title}}</h3>
            <p class="opacity-80 mt-auto text-sm">Final Project : {{$job->salary}}</p>
        </div>
    </div>


    <div class="flex flex-col justify-between sm:items-end items-center gap-4 ml-auto">
        <div class="flex gap-1 opacity-70 m-1">
            <x-tag_comp size="corner">{{$job->location}}</x-tag_comp>
            <x-tag_comp size="corner">{{$job->schedule}}</x-tag_comp>
        </div>
        <div class="flex flex-wrap gap-1 sm:justify-end justify-center">
            @foreach ($job->tags as $tag)
                <x-tag_comp size="expand" :$tag/>
            @endforeach
        </div>
    </div>
</div>
