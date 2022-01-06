<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    

    /**
     * Store a new Post and assign it to its user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $validate = $request->validate([
                'post' => 'required|min:2|max:255',
                'client_id'=> 'required|exists:clients,id'
            ]);

            Post::create([
                'post'=>$request->post,
                'client_id'=>$request->client_id
            ]);

            
    }

}
