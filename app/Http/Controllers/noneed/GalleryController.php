<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
class GalleryController extends Controller
{
    //
    public function index(Request $r)
    {
        $posts= Post::where('main_category_id',11);
        $subcategory = Category::where('parent_id', 11)->get();

        if($r->get('sub')){
        	$posts = $posts->where('sub_category_id',$r->get('sub'));
        }
        return view('gallery',['posts'=>$posts->paginate(3), 'subcategory'=>$subcategory]);
    }
}
