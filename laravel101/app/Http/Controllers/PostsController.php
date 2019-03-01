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

        $allPosts = Post::with('user')->get();





        return view('welcome')->with('posts',$allPosts);
    }


    public function show(){

        $post_id = $_GET['id'];


            $post = Post::find($post_id);



        return view('showPost')->with('post',$post);
    }

    public function delete(){

        $post_id = $_GET['id'];

        Post::destroy($post_id);

        Post::where('id',$post_id)->destroy();

        return view('welcome');
        return redirect()->back();
    }

    public function showUpdateView($id){

        $post = Post::find($id);

        return view('update')->with('post',$post);
    }

    public function update($id){

        $title = $_POST['title'];
        $desc = $_POST['desc'];

        $post = Post::find($id);

        $post->title = $title;
        $post->description = $desc;

        $post->save();

        return redirect('/');

    }
}
