<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students= Student::orderby('id', 'desc')->paginate(10);
        return view('admin.student',compact('students'));
    }

    public function search(Request $request)
    {   
        $input = $request->all();
        if($request->get('search')){
            $students = Student::where("name", "LIKE", "%{$request->get('search')}%")
                ->orWhere("email", "LIKE", "%{$request->get('search')}%")->paginate(10);    
        }else{
           $students= Student::paginate(10);
         }
        return view('admin.student',compact('students'));
    }
    
    public function delete($id)
    {   
        $contact = Student::find($id)->delete();
      return redirect()->back()->with('success','Student is successfully deleted!');
    }  
}
