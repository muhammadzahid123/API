<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function add(Request $req)
    {
        $post = new Post;

        $post->title=$req->title;
        $post->content=$req->content;
        $result= $post->save();
         if($result)
         {
              return ["result"=>"result has been saved"];
        }
else
{
    return ["result"=>"operation failed"];
}
    }

    }

