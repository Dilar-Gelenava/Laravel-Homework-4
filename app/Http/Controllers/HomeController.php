<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function table()
    {
    	$posts = Post::all();
    	return view("pages.table", ['posts' => $posts]);
    }
}
