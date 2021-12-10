<?php


namespace App\Services;

use App\Models\Post;

class PostServices
{
    public function store($request){
        Post::create([
            'body' => $request->body,
            'user_id' => auth()->id(),
        ]);
    }
}
