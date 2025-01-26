@props(["job"])
<div class="group cursor-pointer bg-dwhite p-4 flex gap-5 flex-col items-center justify-between rounded-lg border-4 border-b-0 border-transparent hover:border-dorange hover:shadow-borderShadow transition-all duration-300 ease-in-out" >
    <div class="self-start">{{$job->employer->name}}</div>
    <div class="font-bold text-center">
        <h3 class="text-3xl group-hover:text-dorange transition-all duration-300">{{$job->title}}</h3>
        <p>Total price : {{$job->salary}}</p>
    </div>
    <div class="flex sm:justify-between justify-center items-end tems-end w-full">
        <div class="flex flex-wrap-reverse gap-1 p-1 ">
            @foreach ($job->tags as $tag)
                <x-tag_comp :$tag/>
            @endforeach
        </div>
        <x-emp_logo src="storage/{{$job->employer->logo}}" width="42"></x-emp_logo>

    </div>
</div>
