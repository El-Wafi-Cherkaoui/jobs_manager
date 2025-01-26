@props([
    "size" => "mini",
    "tag"
])
@php
    $classes = 'w-fit bg-dshadow rounded-lg transition-all cursor-pointer hover:bg-dshadow/80';
    if($size == 'mini'){
        $classes = $classes . ' py-1 px-2 text-xs text-dwhite';
    }
    else if($size == 'large'){
        $classes = $classes . ' py-1 px-2 text-xs text-dwhite bg-dwhite text-black font-bold hover:text-dwhite border-2 transition duration-300 border-transparent hover:border-dwhite';
    }
    else if($size == 'corner'){
        $classes = $classes . ' bg-dwhite text-dblack border-2 border-opacity-50 border-dblack px-1 py-1/2 text-xs hover:text-dwhite';
    }
    else{
        $classes = $classes . ' py-1 px-3 text-sm text-dwhite';
    }
@endphp
@if ($size != 'corner')
    <a class="{{$classes}}" href="/tags/{{$tag->title}}">
        {{$tag->title}}
    </a>
@else
    <a class="{{$classes}}">
        {{$slot}}
    </a>
@endif
