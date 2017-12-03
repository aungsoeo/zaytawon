<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;

class StaffController extends Controller
{
    //
    public function index()
    {
        // $cat = Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();
        // // $subcat = Category::where('parent_id','=', '14')->orderBy('parent_id', 'asc')->get();
        $subcat=Category::where('parent_id','=','16')->with('post')->get();
        // dd($subcat[0]->post);

        // $teachers= Post::where('main_category_id','=', '14')->with('SubCategory')->orderby('id', 'asc')->get();
        // // dd($teachers);
        return view('teacher',compact('teachers','cat','subcat'));
    }

    public function timetable()
    {   
        $subcat=Category::where('parent_id','=','17')->with('post')->get();
        return view('timetable',compact('subcat'));
    }
}
