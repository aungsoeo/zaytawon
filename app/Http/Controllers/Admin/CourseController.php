<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form;

class CourseController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students= Form::orderby('id', 'desc')->paginate(10);
        return view('admin.course',compact('students'));
    }

    //show post by id
    public function show($id)
    {
        $post = Form::findOrFail($id);
        return view('admin.course_show',compact('post'));
    }

    public function search(Request $request)
    {   
        $input = $request->all();
        if($request->get('search')){
            $students = Form::where("degree", "LIKE", "%{$request->get('search')}%")
                ->orWhere("email", "LIKE", "%{$request->get('search')}%")->paginate(10);    
        }else{
           $students= Form::paginate(10);
         }
        return view('admin.course',compact('students'));
    }
    
    public function delete($id)
    {   
        $contact = Form::find($id)->delete();
      return redirect()->back()->with('success','Data is successfully deleted!');
    }  
}
