<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    //


    public function insertPost(){

            $title =   $_GET['title'];

            $description = $_GET['desc'];







            $user_id = Auth::user()->id;

            $post = new Post();

                $post->title = $title;
                $post->description = $description;
                $post->user_id = $user_id;

            $post->save();




        echo "post added !";

    }


    public function showPosts(){

        $allPosts = Post::all();



        return view('welcome')->with('posts',$allPosts);
    }
}
