@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('posts')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="image" class="sr-only">Image Upload</label>
                <input type="file" name="image" id="image" value="{{old('image')}}">

                @error('image')
                <div class="text-red-500 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>


            <div class="mb-4">
                <label for="text" class="sr-only">Body</label>
                <textarea type="text" name="text" id="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('text') border-2 border-red-500 @enderror" placeholder="Enter Post" value="{{old('text')}}">
                </textarea>

                @error('text')
                <div class="text-red-500 text-sm">
                    {{$message}}
                </div>
                @enderror

            </div>


            <div class="mb-4">
                <button type="submit" class="bg-blue-500 border-2 w-24 p-4 rounded-lg text-white">Post</button>
            </div>

        </form>


    </div>
</div>

@endsection