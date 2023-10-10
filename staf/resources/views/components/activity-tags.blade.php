@props(['tagsCsv'])
@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex p-5">
    @foreach($tags as $tag)
    <li class="flex items-center justify-center bg-blue-900 text-white rounded-xl py-1 px-3 mr-2 text-s">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>
