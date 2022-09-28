<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::simplePaginate(10);
        return view('theme::index', ['posts' => $posts]);
    }

    public function show($slug){
        $post = Post::findBySlug($slug);
        return view('theme::post', ['post'=>$post]);
    }
}
