<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['founders'] = Post::where('main_category_id',1)->where('sub_category_id',3)->orderby('id', 'desc')->limit(3)->get();
        $data['slider'] = Post::where('main_category_id',1)->where('sub_category_id',20)->orderby('id', 'desc')->get();

        return view('home',[
            'founders'=>$data['founders'],
            'slider'=>$data['slider']
        ]);
    }

}
