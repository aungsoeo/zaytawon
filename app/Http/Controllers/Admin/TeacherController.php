<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use Validator;

class TeacherController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $cat = Category::where('parent_id','=', '0')->pluck('title', 'id');
        $teachers= Post::Where('main_category_id','=','16')->orderby('updated_at', 'desc')->paginate(10);
        return view('admin.teacher',['teachers'=>$teachers, 'cat'=>$cat, 'subcat'=>array()]);
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
        return view('admin.teacher_create', array('cat' => $cat, 'subcat'=>$subcat));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            'custom_field1' => 'required',
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
                'custom_field2' => '',
                'custom_field3' => '',
                'custom_field4' => '',
                'custom_field5' => '',
            ];
        // dd($arr);
        $res=Post::create($arr);

        return redirect()->route('admin.teacher');
    }

    public function edit($id)
    {   
        $teacher = Post::find($id);
        $cat = Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();
        $subcat = Category::where('parent_id','!=', '0')->orderBy('parent_id', 'asc')->get();
        return view('admin.teacher_edit',compact('teacher','cat','subcat'));
    }

    //store update post
    public function update($id, Request $request)
    {   
        // $post= Post::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            'custom_field1' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator); 
        }

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
                'custom_field2' => '',
                'custom_field3' => '',
                'custom_field4' => '',
                'custom_field5' => '',
            ];
        $teacher = Post::findOrFail($id);
        // $input = $request->all();
        $teacher->fill($arr)->save();

        return redirect()->route('admin.teacher');
    }

    //delete  post
    public function delete($id)
    {
      $teacher = Post::find($id)->delete();
      return redirect()->back()->with('success','Teacher is successfully deleted!');
    }

    public function search(Request $request)
    {   
        $subcat = array();
        $teachers= new Post();

        if ($request->get('search')) {
             $teachers= $teachers->where("title", "LIKE", "%{$request->get('search')}%");
        }

        if($request->get('category_id')){
            $teachers = $teachers->where("main_category_id", "=", $request->get('category_id'));
            $subcat = Category::where('parent_id','=', $request->get('category_id'))->get();
        }
       
        $sub_category_id = ($request->get('sub_category_id'))? $sub_category_id = $request->get('sub_category_id') : '';

        if($request->get('sub_category_id')){
            $teachers = $teachers->where("sub_category_id", "=", $request->get('sub_category_id'));
        }

        $teachers = $teachers->orderby('updated_at', 'desc');
        // dd($teachers);
        $teachers = $teachers->paginate(10);
        $cat = Category::where('parent_id','=', '0')->pluck('title', 'id');
        return view('admin.teacher', ['teachers'=>$teachers, 'cat'=>$cat, 'subcat' => $subcat, 'sub_category_id' => $sub_category_id]);
     } 
}