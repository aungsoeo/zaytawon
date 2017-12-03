<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;

class NewsController extends Controller
{
    //
    public function index(Request $r)
    {	
    	$posts= Post::where('main_category_id',2)->orderBy('created_at', 'desc');
        $subcategory = Category::where('parent_id', 2)->get();
        if($r->get('sub')){
            $posts = $posts->where('sub_category_id',$r->get('sub'));
        }
        return view('news',['posts'=>$posts->paginate(3), 'subcategory'=>$subcategory]);
    }

    public function show($id)
    {
    	$post = Post::findOrFail($id);
    	return view('show_post',compact('post'));
    }
}
