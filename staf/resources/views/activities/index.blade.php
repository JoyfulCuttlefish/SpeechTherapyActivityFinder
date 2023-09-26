@vite('resources/css/app.css')


<x-layout>
@include('partials._hero')
@include('partials._search')
<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >

@unless(count($activities) == 0)

@foreach($activities as $activity)
    <x-activity-card :activity="$activity"/>
@endforeach

@else
    <p>No activities found</p>
@endunless
</div>

<div class="flex justify-center mt-4">
    @if ($activities->currentPage() > 1)
        <a href="{{ $activities->previousPageUrl() }}" class="px-3 py-2 bg-blue-800 hover:bg-blue-500 text-white rounded-lg mx-1">&laquo;</a>
    @endif

    @for ($i = 1; $i <= $activities->lastPage(); $i++)
        <a href="{{ $activities->url($i) }}" class="px-3 py-2 bg-blue-800 hover:bg-blue-500 text-white rounded-lg mx-1 {{ ($i == $activities->currentPage()) ? 'bg-blue-500' : '' }}">{{ $i }}</a>
    @endfor

    @if ($activities->hasMorePages())
        <a href="{{ $activities->nextPageUrl() }}" class="px-3 py-2 bg-blue-800 hover:bg-blue-500 text-white rounded-lg mx-1">&raquo;</a>
    @endif
</div>

</x-layout>