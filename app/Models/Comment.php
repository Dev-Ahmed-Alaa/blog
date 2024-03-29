<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment' ,  'post_id'];

    //comments belongs to a post
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
