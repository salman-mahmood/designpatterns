<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Services\Observerpattern\Events\UserRegistered;
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
        // $user = $user->email;
        event(new UserRegistered($user));

        return back();
        // return response()->with('status', 'Profile updated!');
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
