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


        {{-- <a href="javascript:void(0);" onclick="addTagToSearch('{{$tag}}')">{{$tag}}</a>
    </li>
    @endforeach
</ul>

<script>
    function addTagToSearch(tag) {
        // Get the current search term in the search bar
        let currentSearch = document.getElementById('search_display').value;

        // If there's a current search, add a space before adding the tag
        if (currentSearch !== '') {
            currentSearch += ' ';
        }

        // Append the clicked tag to the current search
        currentSearch += tag;

        // Update the search bar with the new search term
        document.getElementById('search_display').value = currentSearch;
    }
</script> --}}


<!-- resources/views/components/activity-tags.blade.php -->


