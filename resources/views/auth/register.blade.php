@extends('layouts.app')
@section('contenido')
    <div class="container mx-auto mt-5">
        <div class="flex justify-center items-center flex-wrap">
            <div class="w-full md:w-1/2">
                <h2 class="mb-4 text-violet-600 text-3xl font-bold">Sign in</h2>
                <form action="/register" method="POST">
                    @csrf
                    <!-- Name input -->
                    <div class="mb-4">
                        <label class="block text-md font-medium text-violet-300 shadow-lg" for="name">Name</label>
                        <input type="text" name="name" id="name" class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                    </div>
                    @error('name')
                        <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                    @enderror

                    <!-- Username input -->
                    <div class="mb-4">
                        <label class="block text-md font-medium text-violet-300 shadow-lg" for="username">Username</label>
                        <input type="text" name="username" id="username" class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                    </div>
                    @error('username')
                        <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                    @enderror

                    <!-- Email input -->
                    <div class="mb-4">
                        <label class="block text-md font-medium text-violet-300 shadow-lg" for="email">Email address</label>
                        <input type="email" name="email" id="email" class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                    </div>
                    @error('email')
                        <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                    @enderror

                    <!-- Password input -->
                    <div class="mb-4">
                        <label class="block text-md font-medium text-violet-300 shadow-lg" for="password">Password</label>
                        <input type="password" name="password" id="password" class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                    </div>
                    @error('password')
                        <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                    @enderror

                    <!-- Confirm Password input -->
                    <div class="mb-4">
                        <label class="block text-md font-medium text-violet-300 shadow-lg" for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                    </div>
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                    @enderror

                    <!-- Submit button -->
                    <button type="submit" class="w-[90%] bg-violet-500 text-white px-3 py-2 rounded-md shadow-sm hover:bg-violet-700 transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 mb-4">Submit</button>

                    <div class="text-center text-xs">
                        <p class="text-white">You are a member? <a href="/login" class="text-violet-500 hover:underline">Sign up</a></p>
                    </div>
                </form>
            </div>
            <div class="w-full md:w-1/2 my-8"> 
                <center>
                    <img class="rounded-xl w-72"
                        src="https://is1-ssl.mzstatic.com/image/thumb/Music116/v4/95/57/c9/9557c903-0d39-84f0-73d0-d6bbf1912b05/197190512830.jpg/1200x1200bf-60.jpg"
                        alt="cinna">
                </center>
            </div>
        </div>
    </div>
@endsection
