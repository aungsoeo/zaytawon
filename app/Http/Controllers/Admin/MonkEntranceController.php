<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\MonkEntranceForm;

class MonkEntranceController extends Controller
{
    public function index()
    {   
        $students= MonkEntranceForm::orderby('id', 'desc')->paginate(10);
        return view('admin.sarthinthar_thangar',compact('students'));
    }

    //show post by id
    public function show($id)
    {
        $post = MonkEntranceForm::findOrFail($id);
        return view('admin.sarthinthar_thangar_show',compact('post'));
    }

    public function search(Request $request)
    {   
        $input = $request->all();
        if($request->get('search')){
            $students = MonkEntranceForm::where("degree", "LIKE", "%{$request->get('search')}%")->paginate(10);    
        }else{
           $students= MonkEntranceForm::paginate(10);
         }
        return view('admin.sarthinthar_thangar',compact('students'));
    }
    
    public function delete($id)
    {   
        $contact = MonkEntranceForm::find($id)->delete();
      return redirect()->back()->with('success','Data is successfully deleted!');
    }  
}
