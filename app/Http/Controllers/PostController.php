<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest()->with(['user', 'likes'])->paginate(20);
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function store(PostRequest $request){
        $request->validated();

        $request->user()->posts()->create([
            'body' => $request->body,
        ]);
//        Post::create([
//            'body' => $request->body,
//            'user_id' => auth()->id(),
//        ]);
        //$this->services->store($request);

        return back();
    }
    public function destroy(Post $post){
        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }
}
