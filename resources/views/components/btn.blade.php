@props([
    'bg_color' => "dorange"
])
@php
    $classes = 'py-1 px-4 rounded-xl shadow-xl transition duration-300';
    if($bg_color == "dorange"){
        $classes = $classes . ' bg-dorange text-dwhite hover:bg-dblack';
    };
@endphp
<a {{$attributes}} class="{{$classes}}">
    {{$slot}}
</a>
