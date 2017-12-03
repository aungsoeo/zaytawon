<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Student;
use App\Mail\Email;
use Mail;

class BookingController extends Controller
{
    //
    public function index()
    {
        return view('book');
    }

    public function postbook(Request $request)
    {
    	$input = $request->all();

    	$rules = array(
		        'name' => 'required',
		        'father_name'=>'required',                          
		        'passed_school'=> 'required',
		        'roll_no' => 'required',
		        // 'email'=>'required|email|unique:student_registration_form',
		        'gender'=>'required',
		        'address'=>'required'        
		    );
  
    	$validator = Validator::make($input, $rules);

    	
    	if ($validator->fails()) 
    	{
	        $messages = $validator->messages();
	        return redirect('book')
	            ->withErrors($validator);

	    } else 
	    {	
	    	// dd($request->all());
	        $user = Student::create($request->all());

	        \Mail::to($user)->send(new Email);

            Mail::send('emails.bookingEmail', ['user' => $user], function ($m) use ($user) {
		            $m->from($user->email, $user->name);
		            $m->to('admin@admin.com', 'admin')
		              ->subject('Receiving Mail From Visitor : ' . $user->name);
		        });        
	        return redirect()->back()->with('success','Student Registration Form created successfully');
             

	    }
    }
}

           