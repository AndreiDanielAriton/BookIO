<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Post;

class SearchController extends Controller
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->middleware('auth');
        $this->post = $post;
    }

    public function index()
    {
        if (isset(request()->search)) {
            $posts = $this->post->all(request()->search);
            return view('search',compact('posts'));
        }
        return view('search',[
            'userId' => auth()->user()->id,
        ]);
    }

}
