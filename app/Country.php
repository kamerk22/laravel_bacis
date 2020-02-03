<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
        // return $this->hasOneThrough(Post::class, User::class);
    }
}
