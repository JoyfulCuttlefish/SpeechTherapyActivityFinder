@props(['activity'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$activity->image ? asset('storage/' . $activity->image) : asset('/images/STAFlogoTopSq.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl text-blue-900">
                <a href="/activities/{{$activity->id}}">{{$activity->title}}</a>
            </h3>
            <div class="text-xl text-blue-900 font-bold mb-4">{{$activity->creatorName}}</div>
            <div class="text-lg mt-4 text-blue-900">
                <i class="fa-solid fa-location-dot"></i> {{$activity->location}}
            </div>
            <x-activity-tags :tagsCsv="$activity->tags" />
        </div>
    </div>
</x-card>