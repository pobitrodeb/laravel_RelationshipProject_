<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;

class Homecontroller extends Controller
{
    public function index()
    {
    //      One to One Relationship 
    //      $phone = User::find(1)->phone; 
    //      return $phone;
        
    //     $user = Phone::find(2)->user; 
    //    return $user;

            // One To Many 
            $comment = Post::find(2)->comments; 
            // return $comment;

            $post = Comment::find(1)->post; 
          //  return $post; 

         $posts = Post::with('comments')->get(); 
         //return $posts; 

        // Many To Many
            $posts = Post::with('categories')->get(); 
          //  return $posts;

        return view('frontend.home.index',[
            'users' => User::all(),
            'posts' => Post::with('comments')->get(),
            'allposts' => Post::with('categories')->get(),
        ]);
    }
}
