<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\People;

class PeopleController extends Controller
{
    public function index()
    {   
        $people= People::orderby('id', 'desc')->paginate(10);
        return view('admin.people',compact('people'));
    }

    //show post by id
    public function show($id)
    {
        $post = People::findOrFail($id);
        return view('admin.people_show',compact('post'));
    }

    public function search(Request $request)
    {   
        $input = $request->all();
        if($request->get('search')){
            $people = People::where("c_name", "LIKE", "%{$request->get('search')}%")
            ->orwhere("title","LIKE","%{$request->get('search')}%")->paginate(10);    
        }else{
           $people= People::paginate(10);
         }
        return view('admin.people',compact('people'));
    }
    
    public function delete($id)
    {   
        $contact = People::find($id)->delete();
      return redirect()->back()->with('success','Data is successfully deleted!');
    }  
}
