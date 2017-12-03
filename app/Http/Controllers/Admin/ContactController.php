<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $contacts= Contact::orderby('id', 'desc')->paginate(10);
        return view('admin.contact',compact('contacts'));
    }

    public function search(Request $request)
    {   
        $input = $request->all();
        if($request->get('search')){
            $contacts = Contact::where("name", "LIKE", "%{$request->get('search')}%")
                ->orWhere("email", "LIKE", "%{$request->get('search')}%")->paginate(10);    
        }else{
           $contacts= Contact::paginate(10);
         }
        return view('admin.contact',compact('contacts'));
    }

    public function delete($id)
    {   
        $contact = Contact::find($id)->delete();
      return redirect()->back()->with('success','Contact is successfully deleted!');
    } 

}
