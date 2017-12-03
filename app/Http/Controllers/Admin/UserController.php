<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use Validator;

class UserController extends Controller
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
        $users= User::orderby('id', 'desc')->paginate(10);
        return view('admin.user',['users'=>$users]);
    }  

    public function create()
    {
        return view('admin.user_create');
    }

    public function store(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role'=>'required',
           'password' => 'required|confirmed|min:6',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator); 
        }

        $arr=[
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ];
        $res=User::create($arr);
        return redirect()->back()->with('success','User is successfully added!');
    }
    public function edit($id)
    {   
        $user = User::find($id);
        return view('admin.user_edit',compact('user'));
    }

    public function update($id, Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required',
            'role'=>'required',
            'password' => 'required|confirmed|min:6',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator); 
        }
        $arr=[  
            'id'=>$id,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ];
        $user = User::findOrFail($id);
        $user->fill($arr)->save();
        return redirect()->route('admin.user');
    }


    public function delete($id)
    {
      $user = User::find($id)->delete();
      return redirect()->back()->with('success','User is successfully deleted!');
    }

    public function search(Request $request)

    {   
        $input = $request->all();
        if($request->get('search')){

            $users = User::where("name", "LIKE", "%{$request->get('search')}%")->orwhere("email", "LIKE", "%{$request->get('search')}%")->paginate(10);      

        }else{

           $users= User::paginate(10);

         }

        return view('admin.user',compact('users'));
     } 
}