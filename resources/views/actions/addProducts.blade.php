@extends('layouts.app')
@section('contenido')
    <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 place-items-center">
        <div class="my-8 w-[90%] h-auto">
            <form action="/addProds" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-md font-medium text-violet-300" for="name">Name</label>
                    <input type="text" name="name" id="name"
                        class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                </div>
                @error('name')
                    <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                @enderror
                <div class="mb-4">
                    <label class="block text-md font-medium text-violet-300" for="name">Price</label>
                    <input type="number" name="price" id="price"
                        class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                </div>
                @error('price')
                    <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                @enderror
                <div class="mb-4">
                    <label class="block text-md font-medium text-violet-300" for="name">Description</label>
                    <input type="text" name="description" id="description"
                        class="w-[90%] border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                </div>
                @error('description')
                    <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                @enderror
                <div class="mb-4">
                    <label class="block text-md font-medium text-violet-300" for="file">Image</label>
                    <input type="file" name="image" id="image"
                        class="w-[90%] bg-white border-gray-300 text-sm rounded-md my-2 p-1 focus:border-violet-400 focus:ring focus:ring-violet-400 focus:ring-opacity-50" />
                </div>
                @error('image')
                    <p class="bg-red-500 text-white text-center rounded p-2">{{ $message }}</p>
                @enderror

                <button type="submit"
                    class="w-[90%] bg-violet-500 text-white px-3 py-2 rounded-md shadow-sm hover:bg-violet-700 transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 mb-4">Add</button>
                {{-- montse te amo <3 --}}
            </form>
        </div>
        <div class="my-8 w-[90%] h-auto">
            <img class="rounded-xl w-72" src="https://is1-ssl.mzstatic.com/image/thumb/Music116/v4/34/52/07/34520723-8838-7f2e-563e-e417f245c8ad/artwork.jpg/600x600bf-60.jpg" 
                alt="uva gang">
        </div>
    </div>
@endsection
