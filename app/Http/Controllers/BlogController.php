<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function getIndex(){
        $posts = Post::paginate(3);
        return view('blog.index')->withPosts($posts);
    }


    public function getSingle($slug){
        //fetch from the DB based on slud
        $post = Post::where('slug','=', $slug)->first();

        //return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }
}
