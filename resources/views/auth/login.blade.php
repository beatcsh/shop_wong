@extends('layouts.app')
@section('contenido')
    <div class="flex justify-center items-center flex-wrap">
        <div class="w-full md:w-1/2 rounded">
            <h2 class="mb-4 text-violet-600 text-3xl font-bold">Sign up</h2>
            <form action="{{ route('login.post') }}" method="post">
                @if (session('mensaje'))
                    <p class="bg-red-500 text-white text-center rounded p-2">{{ session('mensaje') }}</p>
                @endif
                @csrf
                <!-- Username input -->
                <div class="mb-4">
                    <label class="block text-md font-medium text-violet-300 shadow-lg" for="username">Username</label>
                    <input type="text" name="username" id="username" class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                </div>
                @error('username')
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

                <!-- Submit button -->
                <button type="submit" class="w-[90%] bg-violet-500 text-white px-3 py-2 rounded-md shadow-sm hover:bg-violet-700 transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 mb-4">Sign Up</button>

                <div class="text-center text-xs">
                    <p class="text-white">Not a member? <a href="/register" class="text-violet-500 hover:underline">Sign in</a></p>
                </div>
            </form>
        </div>
        <div class="w-full md:w-1/2 my-8"> 
            <center>
                <img class="rounded-xl w-72" src="https://i.scdn.co/image/ab67616d0000b2731fba87bef7823899ee24a7f2"
                    alt="cinna">
            </center>
        </div>
    </div>
@endsection
