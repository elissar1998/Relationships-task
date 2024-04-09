<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $post = Posts::find(1);
        // return $post->comments;

        // foreach( $post->comments as $com){
        //     return $com->body;
        // }
         $comment = Comments::find(1);
         return $comment;
    }
}
