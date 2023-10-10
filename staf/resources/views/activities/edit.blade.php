<x-layout>
    <x-card class=" p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl text-blue-900 font-bold uppercase mb-1">
                Edit an Activity
            </h2>
                <p class="text-blue-900 mb-4">Edit: {{$activity->title}}</p>
        </header>

        <form method="POST" action="/activities/{{$activity->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg text-blue-900 mb-2">Activity Title</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"
                        placeholder="Example: Phonics Game" value="{{$activity->title}}"
                    />

                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
            </div>

            <div class="mb-6">
                <label for="company" class="inline-block text-lg text-blue-900 mb-2">Name of Creator/Source</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="creatorName" value="{{$activity->creatorName}}"
                    />

                    @error('creatorName')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg text-blue-900 mb-2">Activity Location</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="location"
                        placeholder="Example: Online, Boston MA, etc" value="{{$activity->location}}"
                    />
                    @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg text-blue-900 mb-2">Contact Email</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email" value="{{$activity->email}}"
                    />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg text-blue-900 mb-2">Website</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="website" value="{{$activity->website}}"
                    />
                    @error('website')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg text-blue-900 mb-2">Tags (Comma Separated)</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="tags"
                        placeholder="Example: Reading, Preschool, Articulation, Stuttering, etc" value="{{$activity->tags}}"
                    />
                    @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg text-blue-900 mb-2">
                    Activity Image
                </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="image"
                    />
                    <img
            class="w-48 mr-6 mb-6"
            src="{{$activity->image ? asset('storage/' . $activity->image) : asset('/images/STAFlogoTopSq.png')}}"
            alt=""
        />


                    @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg text-blue-900 mb-2">
                    Description
                </label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description"
                        rows="10"
                        placeholder="Include tasks, type of activity, assessment, game, etc"> {{$activity->description}}
                    </textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-blue-900 text-white rounded py-2 px-4 hover:bg-black">
                    Update Activity
                </button>

                <a href="/" class="text-blue-900 ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>