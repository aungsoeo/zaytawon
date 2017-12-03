<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use App\Form;
use App\Contact;
use Validator;
use Mail;
use App\Mail\Email;
use Response;
use File;
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
    public function showPostsByCategory($category, $subcat=""){
        //echo $category; exit;
        $cat = Category::where('title', '=', $category)->get();
        // dd($cat);
        $cat_id = "";
        foreach($cat as $c){
            $cat_id = $c->id;
        }
        if($cat_id==""){
            echo "404"; exit;
        }

        $posts= Post::where('main_category_id','=',$cat_id);

        $subview = "";
        if($subcat!=""){
            $cat = Category::where('title', '=', $subcat)->where('parent_id','=',$cat_id)->get();
            $subcat_id = "";
            foreach($cat as $c){
                $subcat_id = $c->id;
            }
            if($subcat_id==""){
                echo "404"; exit;
            }
            $subview = $subview = ".".$subcat;
            $posts = $posts->where('sub_category_id','=',$subcat_id);
        }

        $posts = $posts->orderby('updated_at', 'desc')->paginate(12);
        // var_dump($posts);
        $data['donor'] = Post::where('main_category_id',39)->orderby('id', 'desc')->limit(10)->get();
        $data['process'] = Post::where('main_category_id',40)->orderby('id', 'desc')->limit(5)->get();
        $data['founders'] = Post::where('main_category_id',41)->orderby('id', 'desc')->limit(3)->get();
        $data['purpose'] = Post::where('main_category_id',49)->orderby('id', 'desc')->get();
        $view = str_replace(' ', '', $category.$subview);

        return view($view,[
                'posts'=>$posts,
                'donors'=>$data['donor'],
                'process'=>$data['process'],
                'founders'=>$data['founders'],
                'purpose'=>$data['purpose']
            ]);
    }
/****** no need
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
            //'short_description' => 'required',
            //'feature_photo' => 'required',
            //'detail_description' => 'required',
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
                'title' => $request->title,
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => ($request->sub_category_id)?$request->sub_category_id:'',
                'short_description' => ($request->short_description)? $request->short_description : '',
                'feature_photo' => $feature_photo,
                'attach_file' =>($request->file('attach_file'))? $attach_file:'',
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'main_category_id' => 'required',
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
                'sub_category_id' => ($request->sub_category_id)?$request->sub_category_id:'',
                'short_description' => ($request->short_description)? $request->short_description : '',
                'feature_photo' => $feature_photo,
                'attach_file' =>($request->file('attach_file'))? $attach_file:'',
                'detail_description' => ($request->detail_description)? $request->detail_description : '',
                'detail_photo' => $detail_photo,
                'custom_field1' => ($request->custom_field1)? $request->custom_field1 : '',
                'custom_field2' => ($request->custom_field2)? $request->custom_field2 : '',
                'custom_field3' => ($request->custom_field3)? $request->custom_field3 : '',
                'custom_field4' => ($request->custom_field4)? $request->custom_field4 : '',
                'custom_field5' => ($request->custom_field5)? $request->custom_field5 : '',
            ];
        // dd($arr);
        $post = Post::findOrFail($id);
        // $input = $request->all();
        $post->fill($arr)->save();

        return redirect()->route('admin.post');
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
    ************ **/
    //show post by id
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $data['donor'] = Post::where('main_category_id',39)->orderby('id', 'desc')->limit(3)->get();
        $data['process'] = Post::where('main_category_id',40)->orderby('id', 'desc')->limit(3)->get();
        $data['founders'] = Post::where('main_category_id',41)->orderby('id', 'desc')->limit(3)->get();
        return view('post_show',[
                'post'=>$post,
                'donors'=>$data['donor'],
                'process'=>$data['process'],
                'founders'=>$data['founders']
            ]);
    }

     // member registration form store
     public function form_store(Request $request)
     {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'father_name' => 'required',
            'nrc' => 'required',
            'phone_no' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                'name'=>$request->name,
                'father_name'=>$request->father_name,
                'nrc'=>$request->nrc,
                'phone_no'=>$request->phone_no,
                'address'=>$request->address,
                'organization'=>($request->organization)? $request->organization: '',
                'gender'=>$request->gender,
                'monastery_name'=>($request->monastery_name)?$request->monastery_name:'',
                'is_party'=>($request->is_party)?$request->is_party:'0',
                'education'=>($request->education)?$request->education:'',
            ];

        // dd($arr);
        $user=Form::create($arr);
        Mail::send('emails.memberEmail', ['user' => $user], function ($m) use ($user)
        {
            $m->to('admin@admin.com', 'admin')
              ->subject('Receiving Mail From Visitor : ' . $user->name);
        });

        return redirect()->back()->with('success','Thanks for your registeration!');
     }

     // contact form store
    public function contact_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'email'=> 'required|email|unique:contact_form',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                'name'=>$request->name,
                'email'=>($request->email)?$request->email:'',
                'comment'=>($request->comment)? $request->comment:'',
            ];

        // dd($arr);
        $input['email']=($request->email)?$request->email:'';
        $user=Contact::create($arr);
        /**tempory commit out **/
        /**
        if($input['email']!=''){
            Mail::send('emails.contactEmail', ['user' => $user], function($m) use ($user) {
                $m->from('admin@baho.com', 'Baho Admin');
                $m->to([env("ADMIN_EMAIL", "fancystar7@gmail.com"), $user->email]);
                $m->subject('Receiving Mail From Visitor : ' . $user->name);
            });
        }else{
            Mail::send('emails.contactEmail', ['user' => $user], function($m) use ($user) {
                $m->from('admin@baho.com', 'Baho Admin');
                $m->to([env("ADMIN_EMAIL", "fancystar7@gmail.com")]);
                $m->subject('Receiving Mail From Visitor : ' . $user->name);
            });
        } **/

        return redirect()->back()->with('success','Thanks for contacting us!');
     }

    public function downfun($id)
    {
        $post= Post::where('id',$id)->get()->first();

        $file= public_path(). "/upload/posts/$post->attach_file";
        $headers = array(
                  'Content-Type: application/pdf',
                );

        if ($post->attach_file=="")
        {
            // echo "not exists";
            return redirect()->back()->withErrors(['File not exist!']);
        }
        else{
           return Response::download($file,$post->attach_file, $headers);
        }
    }

    public function viewfile($attach_file)
    {
        $post= Post::where('attach_file',$attach_file)->get()->first();
        $filename = $post->attach_file;
        $path = public_path(). "/upload/posts/$post->attach_file";

        if ($post->attach_file=="")
        {
            // echo "not exists";
            return redirect()->back()->withErrors(['File not exist!']);
        }
        else{
              return Response::make(file_get_contents($path), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="'.$filename.'"'
            ]);
        }
    }

    public function getVideo(Video $video)
    {
        $name = $video->name;
        dd($name);
        $fileContents = Storage::disk('local')->get("uploads/posts/{$name}");
        $response = Response::make($fileContents, 200);
        $response->header('Content-Type', "video/mp4");
        return $response;
    }


}
