<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
use App\Form;
use App\Contact;
use Validator;
use Mail;
use App\Mail\Email;
use Response;
use File;

class RegistrationController extends Controller
{
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

        return redirect()->back()->with('success','သင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာ တင္ျခင္းေအာင္ျမင္ပါသည္။');
    }
    // စာသင္သားသံဃာမ်ား ၀င္ခြင့္ပုံစံ
    public function monk_entrace_store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
          "ဘဲြ႔အမည္" => 'required',
          "အသက္_သိကၡာ" => 'required',
          "သာသနာ၀င္မွတ္တမ္းအမွတ္" => 'required',
          "အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ_" => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                "degree"=>$request->ဘဲြ႔အမည္,
                "age"=>$request->အသက္_သိကၡာ,
                "birth_date"=>$request->ေမြးသကၠရာဇ္,
                "birth_place"=>$request->ေမြးရပ္ဇာတိ,
                "thatharnar_no"=>$request->သာသနာ၀င္မွတ္တမ္းအမွတ္,
                "live_monastery"=>$request->မူလသီတင္းသုံးရာေက်ာင္းတုိက္,
                "teacher_name_address"=>$request->ဥပဇၥ်ယ္ဆရာေတာ္ဘြဲ႔အမည္ႏွင္ေနရပ္လိပ္စာ,
                "lived_monastery"=>$request->ေနထုိင္ခဲ့ဘူးေသာေက်ာင္းတုိက္မ်ား,
                "learned_monastery"=>$request->ေနာက္ဆုံးေနထုိင္ပညာသင္ၾကားခဲ့ေသာေက်ာင္းတုိက္ႏွင့္လိပ္စာ,
                "f_name_address"=>$request->အဘအမည္ႏွင့္_ေနရပ္လိပ္စာ,
                "passed_gov_sch"=>$request->အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ
            ];

        dd($arr);
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
