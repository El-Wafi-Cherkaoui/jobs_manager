@props([
    "width" => 100,
    "expand" => false
])
@php
    $classes = "rounded-lg border-4 border-transparent transition duration-500 group-hover:border-dorange";
    if($expand) {
        $classes = $classes . " sm:w-[100px] sm:h-auto] w-full";
    }else{
        $classes = $classes . " sm:inline-block sm:w-[84px] sm:h-auto hidden";
    }
@endphp
<img src="https://picsum.photos/seed/{{ rand(0, 100000) }}/512" alt="x" class="{{$classes}}">
