<?php

namespace App\Models;

use App\Services\Observerpattern\PostObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    // Define an "observing" relationship
    public static function boot()
    {
        parent::boot();
        static::observe(PostObserver::class);
    }
}
