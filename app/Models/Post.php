<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['post' , 'client_id'];

    //posts belongs to a client
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

    //post has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
