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
        // echo $category; 
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
        // $data['founders'] = Post::where('main_category_id',1)->where('sub_category_id',3)->orderby('id', 'desc')->limit(3)->get();

        // $data['thatharnar1'] = Post::where('main_category_id',12)->where('sub_category_id',13)->orderby('id', 'desc')->limit(5)->get();

        $data['parahita_process'] = Post::where('main_category_id',12)->where('sub_category_id',18)->orderby('id', 'desc')->limit(5)->get();

        // $data['thatharnar2'] = Post::where('main_category_id',12)->where('sub_category_id',14)->orderby('id', 'desc')->limit(5)->get();

        // $data['book1'] = Post::where('main_category_id',4)->where('sub_category_id',5)->orderby('id', 'desc')->paginate(12);

        // $data['book2'] = Post::where('main_category_id',4)->where('sub_category_id',6)->orderby('id', 'desc')->paginate(12);

        // $data['parahita_gp'] = Post::where('main_category_id',9)->where('sub_category_id',11)->orderby('id', 'desc')->get();

        // $data['pyinnyardarna'] = Post::where('main_category_id',9)->where('sub_category_id',10)->orderby('id', 'desc')->get();

         $data['rule'] = Post::where('main_category_id',9)->where('sub_category_id',19)->orderby('id', 'desc')->get();

        $data['donors'] = Post::where('main_category_id',16)->orderby('id', 'desc')->limit(10)->get();

        $data['people'] = Post::where('main_category_id',17)->orderby('id', 'desc')->limit(10)->get();

        $view = str_replace(' ', '', $category.$subview);
        // echo $view;
        // // // echo "<br>";
        // dd($data['thatharnar2']);

        return view($view,[
                'posts'=>$posts,
                // 'thatharnar1'=>$data['thatharnar1'],
                // 'thatharnar2'=>$data['thatharnar2'],
                'parahita_process'=>$data['parahita_process'],
                // 'book1'=>$data['book1'],
                // 'book2'=>$data['book2'],
                // 'parahita_gp'=>$data['parahita_gp'],
                // 'pyinnyardarna'=>$data['pyinnyardarna'] ,
                'rule'=>$data['rule'] ,
                'donors'=>$data['donors'],
                'people'=>$data['people']

            ]);
    }

    //show post by id
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $data['donors'] = Post::where('main_category_id',16)->orderby('id', 'desc')->limit(10)->get();

        $data['people'] = Post::where('main_category_id',17)->orderby('id', 'desc')->limit(10)->get();

        return view('post_show',[
                'post'=>$post,
                'donors'=>$data['donors'],
                'people'=>$data['people']

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
                'url'=>($request->url)?$request->url:'',
                'comment'=>($request->comment)? $request->comment:'',
            ];

        // dd($arr);
        $input['email']=($request->email)?$request->email:'';
        $user=Contact::create($arr);
        /**tempory commit out **/
        /**
        if($input['email']!=''){
            Mail::send('emails.contactEmail', ['user' => $user], function($m) use ($user) {
                $m->from('admin@zaytawon.com', 'Zaytawon Admin');
                $m->to([env("ADMIN_EMAIL", "fancystar7@gmail.com"), $user->email]);
                $m->subject('Receiving Mail From Visitor : ' . $user->name);
            });
        }else{
            Mail::send('emails.contactEmail', ['user' => $user], function($m) use ($user) {
                $m->from('admin@zaytawon.com', 'Zaytawon Admin');
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


    //သင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာ
    public function monk_student_store(Request $request)
    {
                // dd($request->all());
        $validator = Validator::make($request->all(), [
            'degree' => 'required',
            'f_name' => 'required',
            'birth_date'=>'required',
            'age'=>'required',
            'phone'=>'required',
            'email'=> 'required|email|unique:contact_form',
            'passed_date'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                'degree' => $request->degree,
                'f_name' => $request->f_name,
                'thatharnar_no'=>($request->thatharnar_no)?$request->thatharnar_no:'',
                'birth_date'=>$request->birth_date,
                'age'=>$request->age,
                'war_taw'=>$request->war_taw,
                'school_address'=>$request->school_address,
                'phone'=>$request->phone,
                'email'=> $request->email,
                'passed_date'=>$request->passed_date
            ];

        // dd($arr);
        $input['email']=($request->email)?$request->email:'';
        $user=Form::create($arr);
        /**tempory commit out **/
        /**
        if($input['email']!=''){
            Mail::send('emails.contactEmail', ['user' => $user], function($m) use ($user) {
                $m->from('admin@zaytawon.com', 'Zaytawon Admin');
                $m->to([env("ADMIN_EMAIL", "fancystar7@gmail.com"), $user->email]);
                $m->subject('Receiving Mail From Visitor : ' . $user->name);
            });
        }else{
            Mail::send('emails.contactEmail', ['user' => $user], function($m) use ($user) {
                $m->from('admin@zaytawon.com', 'Zaytawon Admin');
                $m->to([env("ADMIN_EMAIL", "fancystar7@gmail.com")]);
                $m->subject('Receiving Mail From Visitor : ' . $user->name);
            });
        } **/

        return redirect()->back()->with('success','Thanks for contacting us!');
    }


}
