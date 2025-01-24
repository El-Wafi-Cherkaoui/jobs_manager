@props([
    "width" => 100
])
<img src="https://picsum.photos/seed/{{ rand(0, 100000) }}/{{$width}}" alt="x" class="rounded-lg border-4 border-transparent transition duration-500 group-hover:border-dorange">
