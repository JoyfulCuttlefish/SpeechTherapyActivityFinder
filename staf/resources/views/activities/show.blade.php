<x-layout>



@vite('resources/css/app.css')

<a href="/" class="inline-block text-blue-900 ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<x-card class="p-20">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{$activity->image ? asset('storage/' . $activity->image) : asset('/images/STAFlogoTopSq.png')}}"
            alt=""
        />

        <h3 class="text-2xl text-blue-900 mb-2">{{$activity->title}}</h3>
        <div class="text-xl text-blue-900 font-bold mb-4">{{$activity->creatorName}}</div>
        <div class="text-lg text-blue-900 my-4">
            <i class="fa-solid fa-location-dot"></i> {{$activity->location}}
        </div>

        <x-activity-tags :tagsCsv="$activity->tags" />
            
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl text-blue-900 font-bold mb-4">
                Description
            </h3>
            <div class="text-lg space-y-6">
                <p class="text-blue-900">
                    {{$activity->description}}
                </p>
                
                <a
                    href="{{$activity->email}}"
                    class="block bg-blue-900 text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact</a
                >

                <a
                    href="{{$activity->website}}"
                    target="_blank"
                    class="block bg-blue-900 text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit
                    Website</a
                >
            </div>
        </div>
    </div>
</x-card>
</div>
</x-layout>