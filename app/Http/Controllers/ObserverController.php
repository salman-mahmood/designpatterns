<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ObserverController extends Controller
{
    public function RegUser() {
        return view('userreg');
    }

    public function UserReg(Request $request) {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create(request(['name', 'email', 'password']));
        return back();
    }

    public function Posts() {
        return view('posts');
    }

    public function PublishPost(Request $request) {

        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create(request(['title', 'content']));
        // $user = $user->email;
        return back();
    }

}
