<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class HistoryController extends Controller
{
    //show all post in history
    public function index()
    {	
    	$posts= Post::where('main_category_id',1)->orderBy('created_at', 'desc')->paginate(3);
        $founders= Post::where('main_category_id',1)->where('sub_category_id',3)->paginate(3);
        return view('history',['posts'=>$posts, 'founders'=>$founders]);
    }

    // show post in history by id
    public function show($id)
    {
    	$post = Post::findOrFail($id);
    	return view('show_post',compact('post'));
    }
}
