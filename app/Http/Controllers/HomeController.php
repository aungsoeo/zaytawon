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
        // $data['founders'] = Post::where('main_category_id',1)->where('sub_category_id',3)->orderby('id', 'desc')->limit(3)->get();
        $data['news'] = Post::where('main_category_id',2)->orderby('id', 'desc')->limit(5)->get();
        $data['donor'] = Post::where('main_category_id',39)->orderby('id', 'desc')->limit(10)->get();
        $data['process'] = Post::where('main_category_id',40)->orderby('id', 'desc')->limit(5)->get();
        $data['founders'] = Post::where('main_category_id',41)->orderby('id', 'desc')->limit(3)->get();
         $data['slider'] = Post::where('main_category_id',23)->where('sub_category_id',24)->get();
        // $data['about'] = Post::where('main_category_id',23)->where('sub_category_id',25)->orderby('id', 'asc')->limit(2)->get();
        $data['purpose'] = Post::where('main_category_id',49)->orderby('id', 'desc')->get();
        // var_dump($data);
        // dd($data);
        return view('home',[
            'posts'=>$data['news'],
            'donors'=>$data['donor'],
            'process'=>$data['process'],
            'founders'=>$data['founders'],
            'slider'=>$data['slider'],
            'purpose'=>$data['purpose']
        ]);
    }

    public function dosth() // Edited by HeinHtetAung for admin_user_middleware
    {
        return "awesome";
    }
}
