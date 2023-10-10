<x-layout>
    <x-card class=" p-10 max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl text-blue-900 font-bold uppercase mb-1">
                    Register
                </h2>
                    <p class="text-blue-900 mb-4">Create an account to post activities</p>
            </header>

        <form method="POST" action="/users">
            @csrf

            <div class="mb-6">
                <label for="name" class="inline-block text-lg text-blue-900 mb-2">Name</label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name" value="{{old('name')}}"
                    />

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg text-blue-900 mb-2">Contact Email</label>
                    <input
                        type="email"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email" value="{{old('email')}}"
                    />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg text-blue-900 mb-2">
                    Password
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password" value="{{old('password')}}"
                />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="password2"
                    class="inline-block text-lg text-blue-900 mb-2"
                >
                    Confirm Password
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password_confirmation" value="{{old('password_confirmation')}}"
                />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-blue-900 text-white rounded py-2 px-4 hover:bg-purple-400" type="submit">
                    Sign Up
                </button>
            </div>

            <div class="mb-8">
                <p class="text-lg text-blue-900">
                    Already have an account?
                    <a href="/login"
                    class="hover:text-blue-800 text-purple-400">  Login</a
                    >
                </p>
                {{-- <a href="/" class="text-blue-900 ml-4"> Back </a> --}}
            </div>
        </form>
    </x-card>
</x-layout>