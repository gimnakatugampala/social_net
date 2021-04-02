@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">

        @if (count($errors) > 0)
        <div class="bg-red-500 text-white p-3 rounded-lg mb-4">
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
            </div>


            <div class="mb-4">
                <label for="text" class="sr-only">Body</label>
                <textarea type="text" name="text" id="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('text') border-2 border-red-500 @enderror" placeholder="Enter Post" value="{{old('text')}}">
                </textarea>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 border-2 w-full p-4 rounded-lg text-white">Post</button>
            </div>

        </form>

        @if($posts->count())
        <h1 class="text-4xl text-center mb-4">All Posts</h1>
        @foreach($posts as $post)
        <div class="bg-gray-200 w-3/4 my-6 text-center rounded-lg p-8 mx-auto">
            <span class="flex justify-between">
                <a href="" class="font-bold mb-2">Gimna</a> <span class="text-gray-600 text-sm">date</span>
            </span>
            <p class="flex mb-6">{{$post->text}}</p>
            <img src="images/{{$post->image}}" class="w-full">
        </div>
        @endforeach
        @else
        <p>There are no Posts</p>
        @endif



    </div>
</div>

@endsection