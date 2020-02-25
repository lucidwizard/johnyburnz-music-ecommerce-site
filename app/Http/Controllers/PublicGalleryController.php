<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicGalleryController extends Controller
{
    public function show(Post $post)
    {
        Post::find($post);
        //dd($post);
        return view('showImage', compact('post'));
    }
}
