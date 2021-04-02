<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //not authencited return
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->with('status', 'Invalid Email / Password');
        }

        //rediect
        return redirect()->route('posts');
    }
}
