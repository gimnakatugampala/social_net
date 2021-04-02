@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">

        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Your Name">
            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Your Username">
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Your Email">
            </div>


            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Your Password">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Confirmation Password">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 border-2 w-full p-4 rounded-lg text-white">Register</button>
            </div>

        </form>

    </div>
</div>

@endsection