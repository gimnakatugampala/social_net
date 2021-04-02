<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('post.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'text' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);


        $request->user()->posts()->create([
            'user_id' => Auth::id(),
            'text' => $request->text,
            'image' => $imageName
        ]);

        // Post::create([
        //     'user_id' => Auth::id(),
        //     'text' => $request->text,
        //     'image' => $imageName
        // ]);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}
