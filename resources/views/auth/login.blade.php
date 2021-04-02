@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg mt-24">

        @if(session('status'))
        <div class="bg-red-400 p-3 text-white rounded-lg text-center mb-2">
            {{session('status')}}
        </div>
        @endif

        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-2 border-red-500 @enderror" placeholder="Your Email" value="{{old('email')}}">

                @error('email')
                <div class="text-red-500 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-2 border-red-500 @enderror" placeholder="Your Password">

                @error('password')
                <div class="text-red-500 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 border-2 w-full p-4 rounded-lg text-white">Login</button>
            </div>

        </form>

    </div>
</div>

@endsection