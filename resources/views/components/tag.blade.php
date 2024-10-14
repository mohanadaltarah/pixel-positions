@props(['size' => 'base', 'tag'])

@php
    $classes = "bg-white/10 hover:bg-white/25 font-bold rounded-xl transition-colors font-bold duration-300";

    if($size === 'base'){
        $classes .= " px-5 py-1 text-sm";
    }

    if($size === 'small'){
        $classes .= " px-2 py-1 text-xs";

    }
@endphp

<a href="/tags/{{strtolower($tag->name)}}" class="{{$classes}}">{{$tag->name}}</a>
