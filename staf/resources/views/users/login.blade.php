<x-layout>
    <x-card class=" p-10 max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl text-blue-900 font-bold uppercase mb-1">
                    Login
                </h2>
                    <p class="text-blue-900 mb-4">Log into your account to post activities</p>
            </header>

        <form method="POST" action="/users/authenticate
        ">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-lg text-blue-900 mb-2">Email</label>
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
                <button class="bg-blue-900 text-white rounded py-2 px-4 hover:bg-purple-400" type="submit">
                    Sign In
                </button>
            </div>

            <div class="mb-8">
                <p class="text-lg text-blue-900">
                    Don't have an account?
                    <a href="/register"
                    class="hover:text-blue-800 text-purple-400">  Register</a
                    >
                </p>
                {{-- <a href="/" class="text-blue-900 ml-4"> Back </a> --}}
            </div>
        </form>
    </x-card>
</x-layout>