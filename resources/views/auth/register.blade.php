@extends('layouts.app')
@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 mb-4 hover-zoom">
            <center>
                <img class="img-fluid rounded" src="https://www.mubis.es/media/users/12828/311967/que-pelicula-de-superheroes-es-vuestra-favorita-original.jpg" width="300px" alt="cinna">
            </center>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Sign in</h2>
            <form action="/register" method="POST">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control" />
                    <label class="form-label" for="name">Name</label>
                </div>
                @error('name')
                <p class="bg-danger text-white text-center rounded-4 p-2">{{$message}}</p>
                @enderror

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" name="username" id="username" class="form-control" />
                    <label class="form-label" for="username">Username</label>
                </div>
                @error('username')
                <p class="bg-danger text-white text-center rounded-4 p-2">{{$message}}</p>
                @enderror

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control" />
                    <label class="form-label" for="email">Email address</label>
                </div>
                @error('email')
                <p class="bg-danger text-white text-center rounded-4 p-2">{{$message}}</p>
                @enderror

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password" id="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                </div>
                @error('password')
                <p class="bg-danger text-white text-center rounded-4 p-2">{{$message}}</p>
                @enderror

                <!-- Confirm Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                </div>
                @error('password_confirmation')
                <p class="bg-danger text-white text-center rounded-4 p-2">{{$message}}</p>
                @enderror

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form5Example3" checked />
                    <label class="form-check-label" for="form5Example3">
                        I have read and agree to the terms
                    </label>
                </div>
 
                <!-- Submit button -->
                <button type="submit" class="btn btn-warning btn-block mb-4">Subscribe</button>
            </form>
        </div>
    </div>
</div>
@endsection