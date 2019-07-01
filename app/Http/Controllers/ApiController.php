<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Post;

class ApiController extends Controller
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->middleware('auth');
        $this->post = $post;
    }

    public function index()
    {
        // Get all the post
        return [];
        $posts = $this->post->all();
        return view('search',compact('posts'));
    }

    public function show($id)
    {
        $post = $this->post->findById($id);
        dd($post);
        return view('someview', compact('post'));
    }
}
