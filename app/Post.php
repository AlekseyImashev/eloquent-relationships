<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Likable;
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
