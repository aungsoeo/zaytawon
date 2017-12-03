<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Contact;
use App\Mail\Email;
use App\Mail\SendEmail;
use Mail;


class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function postContact(Request $request)
    {   

    	$input = $request->all();
    	$rules = array(
		        'name' => 'required',                       
		        'email'=> 'required|email|unique:contact_form',    
		        'comment' => 'required'      
		    );

		
    	$validator = Validator::make($input, $rules);
    	
    	if ($validator->fails()) 
    	{
	        $messages = $validator->messages();
	        return redirect('/contact')
	            ->withErrors($validator);

	    } else 
	    {
	        $user= Contact::create($request->all());
            \Mail::to($user)->send(new Email);

            Mail::send('emails.contactEmail', ['user' => $user], function ($m) use ($user) {

            $m->from($user->email, $user->name);

            $m->to('admin@admin.com', 'admin')
              ->subject('Receiving Mail From Visitor : ' . $user->name);
        });
            return redirect()->back()->with('success','Thanks for contacting us!');

	    }

    }
}
