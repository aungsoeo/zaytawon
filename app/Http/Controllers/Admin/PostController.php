<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use App\Form;
use Validator;

class PostController extends Controller
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
        $cat = Category::where('parent_id','=', '0')->pluck('title', 'id');
        $posts= Post::orderby('updated_at', 'desc')->paginate(10);
        return view('admin.post',['posts'=>$posts, 'cat'=>$cat, 'subcat'=>array()]);
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
        return view('admin.post_create', array('cat' => $cat, 'subcat'=>$subcat));
    }

    public function store(Request $request){

        // 'title', 'main_category_id', 'sub_category_id', 'short_description', 'feature_photo', 'detail_description', 'detail_photo', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'custom_field5'

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            'short_description' => 'required',
            'feature_photo' => 'required',
            'detail_description' => 'required',
            // 'detail_photo' => 'required',
            'attach_file'=>'max:50000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }
        $structure= "upload/posts/";
        $feature_photo="";
        if($request->file('feature_photo')!=NULL){

          $file = $request->file('feature_photo');

          if($file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg" || $file->getClientOriginalExtension()=="JPG" || $file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="PNG" || $file->getClientOriginalExtension()=="gif" || $file->getClientOriginalExtension()=="GIF"){

            $feature_photo = $file->getClientOriginalName();
            $file->move($structure, $feature_photo);
          }
        }


        $attach_file="";
        if($request->file('attach_file')!=NULL){

          $file = $request->file('attach_file');

          if($file->getClientOriginalExtension()=="pdf" || $file->getClientOriginalExtension()=="mp4"){

            $attach_file = $file->getClientOriginalName();
            $file->move($structure, $attach_file);
          }
        }

        $detail_photo="";
        if($request->file('detail_photo')!=NULL){

          $file = $request->file('detail_photo');

          if($file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg" || $file->getClientOriginalExtension()=="JPG" || $file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="PNG" || $file->getClientOriginalExtension()=="gif" || $file->getClientOriginalExtension()=="GIF"){

            $detail_photo = $file->getClientOriginalName();
            $file->move($structure, $detail_photo);
          }
        }

        $arr=[
                'title' => $request->title,
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => ($request->sub_category_id)?$request->sub_category_id : '0',
                'short_description' => ($request->short_description)? $request->short_description : '',
                'feature_photo' => $feature_photo,
                'attach_file' => $attach_file,
                'detail_description' => ($request->detail_description)? $request->detail_description : '',
                'detail_photo' => $detail_photo,
                'custom_field1' => ($request->custom_field1)? $request->custom_field1 : '', // for_ASO
                'custom_field2' => ($request->custom_field2)? $request->custom_field2 : '',
                'custom_field3' => ($request->custom_field3)? $request->custom_field3 : '',
                'custom_field4' => ($request->custom_field4)? $request->custom_field4 : '',
                'custom_field5' => ($request->custom_field5)? $request->custom_field5 : '',
            ];

        $res=Post::create($arr);

        return redirect()->route('admin.post');
    }

    //update post by ASO
    public function edit($id)
    {
        $posts = Post::find($id);
        $cat = Category::where('parent_id', '0')->orderBy('parent_id', 'asc')->get();
        $subcat = Category::where('parent_id','!=', '0')->orderBy('parent_id', 'asc')->get();
        return view('admin.post_edit',compact('posts','cat','subcat'));
    }

    //store update post
    public function update($id, Request $request)
    {
        // $post= Post::findOrFail($id);

         $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            // 'short_description' => 'required',
            //'feature_photo' => 'required',
            // 'detail_description' => 'required',
            //'detail_photo' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }


        $structure= "upload/posts/";
        $feature_photo="";
        if($request->file('feature_photo')!=NULL){

          $file = $request->file('feature_photo');

          if($file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg" || $file->getClientOriginalExtension()=="JPG" || $file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="PNG" || $file->getClientOriginalExtension()=="gif" || $file->getClientOriginalExtension()=="GIF"){

            $feature_photo = $file->getClientOriginalName();
            $file->move($structure, $feature_photo);
          }
        }

        $attach_file="";
        if($request->file('attach_file')!=NULL){

          $file = $request->file('attach_file');

          if($file->getClientOriginalExtension()=="pdf"){

            $attach_file = $file->getClientOriginalName();
            $file->move($structure, $attach_file);
          }
        }

        $detail_photo="";
        if($request->file('detail_photo')!=NULL){

          $file = $request->file('detail_photo');

          if($file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg" || $file->getClientOriginalExtension()=="JPG" || $file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="PNG" || $file->getClientOriginalExtension()=="gif" || $file->getClientOriginalExtension()=="GIF"){

            $detail_photo = $file->getClientOriginalName();
            $file->move($structure, $detail_photo);
          }
        }

        $arr=[
                'id'=>$id,
                'title' => $request->title,
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => $request->sub_category_id,
                'short_description' => $request->short_description,
                'feature_photo' => $feature_photo,
                'attach_file' => $attach_file,
                'detail_description' => $request->detail_description,
                'detail_photo' => $detail_photo,
                'custom_field1' => ($request->custom_field1)? $request->custom_field1 : '',
                'custom_field2' => ($request->custom_field2)? $request->custom_field2 : '',
                'custom_field3' => ($request->custom_field3)? $request->custom_field3 : '',
                'custom_field4' => ($request->custom_field4)? $request->custom_field4 : '',
                'custom_field5' => ($request->custom_field5)? $request->custom_field5 : '',
            ];
        $post = Post::findOrFail($id);
        // $input = $request->all();
        $post->fill($arr)->save();

        return redirect()->route('admin.post');
    }
    //show post by id
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post_show',compact('post'));
    }
    //delete  post
    public function delete($id)
    {
      $post = Post::find($id)->delete();
      return redirect()->back()->with('success','Post is successfully deleted!');
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
        return view('admin.post', ['posts'=>$posts, 'cat'=>$cat, 'subcat' => $subcat, 'sub_category_id' => $sub_category_id]);
     }
     //show member
     public function show_member()
     {
       $members= Form::orderby('id', 'desc')->paginate(10);
        return view('admin.member',['members'=>$members]);
     }

     public function member_search()
     {

     }
}
