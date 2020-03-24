<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    function getAll() {
            $posts = DB::table("posts")->get();
            return view('blog.index', ['posts' => $posts]);       
    }

    public function getPost($slug) {
            $post = DB::table('posts')->where('slug', $slug)->first();
            return view('blog.single', ['post' => $post]);
    }
}
