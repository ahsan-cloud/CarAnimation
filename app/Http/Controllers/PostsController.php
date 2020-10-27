<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    function show($slug)
    {
        //$post= Post::where('slug',$slug)->firstorfail();
        
        //dd($post);
    	/*$posts = [
    		'my-first-post' => 'Hello this is Ahsan',
    		'my-second-post' => 'You are doing great man'
    	];*/

        /*if(!isset($slug, $post)){
            abort(404,'Not Found');
        }*/

        /*if(!$post){
            abort(404);
        }*/

    	return view('post',[
    		'post' => Post::where('slug',$slug)->firstorfail()
    		]);
    }
}
