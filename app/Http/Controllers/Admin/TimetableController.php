<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use Validator;

class TimetableController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $cat = Category::where('parent_id','=', '0')->pluck('title', 'id');
        $timetable= Post::Where('main_category_id','=','17')->orderby('updated_at', 'desc')->get();
        return view('admin.timetable',['timetable'=>$timetable, 'cat'=>$cat, 'subcat'=>array()]);
    }  

    public function getsub(Request $r)
    {
        $main_category_id = $r->parent_id;
        $subcat = Category::where('parent_id','=', $main_category_id)->get();
        foreach ($subcat as $s) {
            echo "<option value='".$s->id."'>".$s->title."</option>";
        }
    }

    public function create()
    {
        $cat = Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();
        $subcat = Category::where('parent_id','!=', '0')->orderBy('parent_id', 'asc')->get();
        return view('admin.timetable_create', array('cat' => $cat, 'subcat'=>$subcat));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            'custom_field1' => 'required',
            'custom_field2' => 'required',
            'custom_field3' => 'required',
            'custom_field4' => 'required',
            'custom_field5' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator); 
        }

        $arr=[
                'title' => $request->title,
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => $request->sub_category_id,
                'short_description' =>'',
                'feature_photo' => '',
                'detail_description' => '',
                'detail_photo' => '',
                'custom_field1' =>$request->custom_field1, 
                'custom_field2' => $request->custom_field2,
                'custom_field3' => $request->custom_field3,
                'custom_field4' => $request->custom_field4,
                'custom_field5' => $request->custom_field5,
            ];
        // dd($arr);
        $res=Post::create($arr);

        return redirect()->route('admin.timetable');
    }

    public function edit($id)
    {   
        $timetable = Post::find($id);
        $cat = Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();
        $subcat = Category::where('parent_id','!=', '0')->orderBy('parent_id', 'asc')->get();
        return view('admin.timetable_edit',compact('timetable','cat','subcat'));
    }

    //store update post
    public function update($id, Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            'custom_field1' => 'required',
            'custom_field2' => 'required',
            'custom_field3' => 'required',
            'custom_field4' => 'required',
            'custom_field5' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator); 
        }
        // dd($request->all());
        $arr=[  
                'id'=>$id,
                'title' => $request->title,
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => $request->sub_category_id,
                'short_description' =>'',
                'feature_photo' => '',
                'detail_description' => '',
                'detail_photo' => '',
                'custom_field1' =>$request->custom_field1, 
                'custom_field2' => $request->custom_field2,
                'custom_field3' => $request->custom_field3,
                'custom_field4' => $request->custom_field4,
                'custom_field5' => $request->custom_field5,
            ];
            // dd($arr);
        $teacher = Post::findOrFail($id);
        // $input = $request->all();
        $teacher->fill($arr)->save();

        return redirect()->route('admin.timetable');
    }

    //delete  post
    public function delete($id)
    {
      $timetable = Post::find($id)->delete();
      return redirect()->back()->with('success','Timetable is successfully deleted!');
    }

    public function search(Request $request)
    {   
        $input = $request->all();
        $posts = new Post(); // for_ASO to check fixes this is more better in filter
        
        $subcat = array();

        if($request->get('search')){
            $posts = $posts->where("title", "LIKE", "%{$request->get('search')}%");
        }

        if($request->get('category_id')){
            $posts = $posts->where("main_category_id", "=", $request->get('category_id'));
            $subcat = Category::where('parent_id','=', $request->get('category_id'))->get();
        }
        
        if($request->get('sub_category_id')){
            $posts = $posts->where("sub_category_id", "=", $request->get('sub_category_id'));
        }

        $sub_category_id = ($request->get('sub_category_id'))? $sub_category_id = $request->get('sub_category_id') : '';

        $posts = $posts->orderby('updated_at', 'desc');
        $posts = $posts->paginate(10);
        $cat = Category::where('parent_id','=', '0')->pluck('title', 'id');
        return view('admin.timetable', ['timetable'=>$posts, 'cat'=>$cat, 'subcat' => $subcat, 'sub_category_id' => $sub_category_id]);
     } 
}