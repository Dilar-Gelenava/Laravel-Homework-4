<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create(Request $request)
    {
    	$post = new Post();
    	$post->title = $request->title;
    	$post->text = $request->text;
    	$post->description = $request->description;
    	$post->save();
    	return redirect('/table');
    }
}
