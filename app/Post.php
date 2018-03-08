<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // one to one
    //satu post boleh ada satu post information
    public function post_information()
    {
        return $this->hasOne(PostInformation::class)
                    ->withDefault([
                        'hashtag' => 'tiada value',
                        'color'   => '#000000',
                    ]);
    }

    // one to many
    // satu post boleh ada banyak comment
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
