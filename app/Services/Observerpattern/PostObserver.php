<?php

namespace App\Services\Observerpattern;

use App\Mail\PostPublished;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class PostObserver
{
    public function created(Post $post)
    {
        // Send email notification to users
        $users = User::all(); // Retrieve all users
        foreach ($users as $user) {
            Mail::to($user->email)->send(new PostPublished($post));
        }
    }
}
