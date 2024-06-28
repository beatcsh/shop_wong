@extends('layouts.app')
@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 mb-4 hover-zoom">
            <center>
                <img class="img-fluid rounded" src="https://img.microsiervos.com/Peliculas-Ready-Player-One.jpg" width="300px" alt="cinna">
            </center>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Sign up</h2>
            <form action="/login" method="post">
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
                <button type="submit" class="btn btn-warning btn-block mb-4">Sign Up</button>
            </form>
        </div>
    </div>
</div>
@endsection