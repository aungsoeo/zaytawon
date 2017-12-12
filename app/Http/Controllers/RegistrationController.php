<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
use App\Model\People;
use App\Model\Student;
use App\Form;
use App\Model\MonkEntranceForm;
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
            'email'=> 'email|unique:contact_form,email',
            'url'=>'url'
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
#####################################################################################################
    //သင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာ
    public function monk_student_store(Request $request)
    {
                // dd($request->all());
        $validator = Validator::make($request->all(), [
            'သင္တန္းသားဘြဲ႔ေတာ္' => 'required',
            'အဖအမည္' => 'required',
            'ေမြးသကၠရာဇ္'=>'required',
            'အသက္'=>'required',
            'ဆက္သြယ္ရန္ဖုန္း'=>'required',
            'email'=> 'required|email|unique:contact_form',
            'ဓမၼာစရိယဘဲြ႔ရရွိသည့္ခုႏွစ္သကၠရာဇ္'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                'degree' => $request->သင္တန္းသားဘြဲ႔ေတာ္,
                'f_name' => $request->အဖအမည္,
                'thatharnar_no'=>($request->သာသနာ၀င္မွတ္တမ္းအမွတ္)?$request->သာသနာ၀င္မွတ္တမ္းအမွတ္:'',
                'birth_date'=>$request->ေမြးသကၠရာဇ္,
                'age'=>$request->အသက္,
                'war_taw'=>$request->သိကၡာ,
                'school_address'=>$request->school_address,
                'phone'=>$request->ဆက္သြယ္ရန္ဖုန္း,
                'email'=> $request->email,
                'passed_date'=>$request->ဓမၼာစရိယဘဲြ႔ရရွိသည့္ခုႏွစ္သကၠရာဇ္
            ];
// 
        // dd($arr);
        // $input['email']=($request->email)?$request->email:'';
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
    ##############################################################################################
    // စာသင္သားသံဃာမ်ား ၀င္ခြင့္ပုံစံ
    public function monk_entrace_store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
          "ဘဲြ႔အမည္" => 'required',
          "အသက္" => 'required',
          "သိကၡာ"=> 'required',
          "သာသနာ၀င္မွတ္တမ္းအမွတ္" => 'required',
          // "အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ" => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                "degree"=>$request->ဘဲြ႔အမည္,
                "age"=>($request->အသက္)?$request->အသက္:'',
                "war_taw"=>($request->သိကၡာ)?$request->သိကၡာ:'',
                "birth_date"=>($request->ေမြးသကၠရာဇ္)?$request->ေမြးသကၠရာဇ္:'',
                "birth_place"=>($request->ေမြးရပ္ဇာတိ)?$request->ေမြးရပ္ဇာတိ:'',
                "thatharnar_no"=>($request->သာသနာ၀င္မွတ္တမ္းအမွတ္)?$request->သာသနာ၀င္မွတ္တမ္းအမွတ္:'',
                "live_monastery"=>($request->မူလသီတင္းသုံးရာေက်ာင္းတုိက္)?$request->မူလသီတင္းသုံးရာေက်ာင္းတုိက္:'',
                "teacher_name_address"=>($request->ဥပဇၥ်ယ္ဆရာေတာ္ဘြဲ႔အမည္ႏွင္ေနရပ္လိပ္စာ)?$request->ဥပဇၥ်ယ္ဆရာေတာ္ဘြဲ႔အမည္ႏွင္ေနရပ္လိပ္စာ :' ',
                "lived_monastery"=>($request->ေနထုိင္ခဲ့ဘူးေသာေက်ာင္းတုိက္မ်ား)?$request->ေနထုိင္ခဲ့ဘူးေသာေက်ာင္းတုိက္မ်ား:'',
                "learned_monastery"=>($request->ေနာက္ဆုံးေနထုိင္ပညာသင္ၾကားခဲ့ေသာေက်ာင္းတုိက္ႏွင့္လိပ္စာ)?$request->ေနာက္ဆုံးေနထုိင္ပညာသင္ၾကားခဲ့ေသာေက်ာင္းတုိက္ႏွင့္လိပ္စာ:'',
                "f_name"=>($request->အဘအမည္)?$request->အဘအမည္:'',
                "f_address"=>($request->ေနရပ္လိပ္စာ)?$request->ေနရပ္လိပ္စာ:'',
                "passed_gov_sch"=>($request->အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ)?$request->အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ:''
            ];

        // dd($arr);

        // $input['email']=($request->email)?$request->email:'';
        $user=MonkEntranceForm::create($arr);
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
    ################################################################################################
 //တရားပဲြပင့္ေလွ်ာက္လုိ သူမ်ား
    public function people_store(Request $request)
    {   
        // dd($request->all());
         $validator = Validator::make($request->all(), [
          "တရားပဲြက်င္းပမည့္ရက္" => 'required',
          "ဖုန္းနံပါတ္" => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                "title"=>($request->အေၾကာင္းအရင္းေခါင္းစဥ္)?$request->အေၾကာင္းအရင္းေခါင္းစဥ္:'',
                "place"=>($request->တည္ေနရာ)?$request->တည္ေနရာ:'',
                "date"=>$request->တရားပဲြက်င္းပမည့္ရက္,
                "c_name"=>($request->တာ၀န္ခံ၏အမည္)?$request->တာ၀န္ခံ၏အမည္:'',
                "c_address"=>($request->ေနရပ္လိပ္စာ)?$request->ေနရပ္လိပ္စာ:'',
                "phone"=>$request->ဖုန္းနံပါတ္,
                "position"=>($request->အေနအထား)?$request->အေနအထား:''
            ];

        // dd($arr);

        // $input['email']=($request->email)?$request->email:'';
        $user=People::create($arr);
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

    public function pyinnyardarna_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
          "အမည္" => 'required',
          "အဖအမည္"=>'required',
          "အမိအမည္"=>'required',
          "လူမ်ိဳး"=>'required',
          "ကိုးကြယ္သည့္ဘာသာ"=>'required',
          "ေမြးသကၠရာဇ္"=>'required',
          "ႏုိင္ငံသားစီစစ္ေရးအမွတ္" => 'required',
          "တကၠသိုလ္၀င္တန္းေအာင္ျမင္ခဲ့သည့္ခုႏွစ္သကၠရာဇ္ႏွင့္ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္"=> 'required',
          "ဤသင္တန္းေက်ာင္းတြင္တက္ေရာက္ဖူးျခင္းရွိမရွိ" => 'required',
          "ဆက္သြယ္ရန္ဖုန္း" => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                "name"=>$request->အမည္,
                "f_name"=>$request->အဖအမည္,
                "m_name"=>$request->အမိအမည္,
                "race"=>$request->လူမ်ိဳး,
                "reg"=>$request->ကိုးကြယ္သည့္ဘာသာ,
                "address"=>$request->ေနရပ္လိပ္စာ,
                "birth_date"=>$request->ေမြးသကၠရာဇ္,
                "nrc"=>$request->ႏုိင္ငံသားစီစစ္ေရးအမွတ္,
                "passed_date_school"=>$request->တကၠသိုလ္၀င္တန္းေအာင္ျမင္ခဲ့သည့္ခုႏွစ္သကၠရာဇ္ႏွင့္ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္,
                "is_attend"=>$request->ဤသင္တန္းေက်ာင္းတြင္တက္ေရာက္ဖူးျခင္းရွိမရွိ,                
                "phone_no"=>$request->ဆက္သြယ္ရန္ဖုန္း
            ];

        // dd($arr);

        $user=Student::create($arr);
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

        return redirect()->back()->with('success','ကြန္ပ်ဴတာသင္တန္း ၀င္ခြင့္ေလွ်ာက္ထားျပီးပါျပီ');
    }

    public function grab_news(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email'=> 'email|unique:contact_form,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
              ->withInput()
              ->withErrors($validator);
        }

        $arr=[
                'name'=>$request->name,
                'email'=>($request->email)?$request->email:'',
                'url'=>'',
                'comment'=>'',
            ];
// 
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

}
