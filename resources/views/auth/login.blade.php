@extends('layouts.app')
@section('contenido')
    <div class="row justify-content-center align-items-center">
        <h1 class="mb-5">Welcome!!</h1>
        <div class="col-md-6 mb-4 hover-zoom">
            <center>
                <img class="img-fluid rounded" src="https://i.scdn.co/image/ab67616d0000b2731fba87bef7823899ee24a7f2" width="300px"
                    alt="cinna">
            </center>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Sign up</h2>
            <form action="{{ route('login.post') }}" method="post">
                @if (session('mensaje'))
                    <p class="bg-danger text-white text center rounded-4 p-2">{{ session('mensaje') }}</p>
                @endif
                @csrf
                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" name="username" id="username" class="form-control" />
                    <label class="form-label" for="username">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password" id="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-info btn-block mb-4">Sign Up</button>

                <div class="text-center" style="font-size: 10px">
                    <p>Not a member? <a href="/register">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
