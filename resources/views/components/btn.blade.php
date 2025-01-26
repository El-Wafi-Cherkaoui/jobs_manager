@props([
    'filled' => false,
    'normal' => false
])
@php

    $bg_color = "dorange";
    $bg_hover_color = "dwhite";
    $text_color = "dwhite";
    $text_hover_color = "dblack";
    $border_color = "dorange";

    if($normal){
        $bg_color = "dwhite";
        $text_color = "dblack";
        $border_color = "transparent";
    }

    $classes = 'py-1 px-4 rounded-xl transition duration-300 text-'.$text_color.' hover:bg-'.$bg_hover_color." hover:border-".$border_color ." hover:text-".$text_hover_color;
    if($bg_color == "dorange"){
        $classes = $classes . ' border-4 border-transparant bg-dorange hover:border-dorange';
    };
@endphp
<a {{$attributes}} class="{{$classes}}">
    {{$slot}}
</a>
