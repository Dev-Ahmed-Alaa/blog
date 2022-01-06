<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientControler extends Controller
{
    /**
     * Display clients posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClientResource::collection(Client::all());
    }

    

    /**
     * Store a request from new client
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:2'
        ]);

        if($validate) 
        {
            $client = new Client;
            $client->name = $request->name;
            $client->save();
            return session()->flash('done' , 'Data Stored Successfuly');
        }
            return session()->flash('done' , 'Error');   
    }

    /**
     * Display the specified post and comment of a client.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ClientResource::make(Client::find($id));
    }

    
}
