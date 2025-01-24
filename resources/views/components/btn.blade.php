@props([
    'bg_color' => "dorange"
])
@php
    $classes = 'py-1 px-4 rounded-xl transition duration-300';
    if($bg_color == "dorange"){
        $classes = $classes . ' border-4 border-transparant bg-dorange text-dwhite hover:bg-dwhite hover:text-dorange hover:border-dorange';
    };
@endphp
<a {{$attributes}} class="{{$classes}}">
    {{$slot}}
</a>
