@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter first">
        <!-- ################################################################################################ -->
        @foreach($posts as $t)
        <h1 align="center"><b><font size="5px">{!!$t->title!!}</font></b></h1>
        <!-- <img class="imgr borderedbox inspace-5" src="images/demo/imgr.gif" alt=""> -->
        <p align="justify">{!!$t->short_description!!}</p>
        <p>{!!$t->detail_description!!}</p>
        <hr><br>
        @endforeach
        <!-- for success message -->
        @if ($message = Session::get('success'))
          <div class="alert-success" style=" display: block; background: #efefef;
  color: green; ">
              <p >{{ $message }}</p>
          </div>
         @endif
        <h1 align="center">သင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာ</h1>
        <p>အေၾကာင္းအရာ။ ။သင္တန္းတက္ေရာက္ခြင့္ျပဳပါရန္ ေလွ်ာက္ထားျခင္း။</p>
        <p>ဘုရားတပည့္ေတာ္သည္ ေအာက္ေဖာ္ျပပါ အခ်က္အလက္မ်ား ကိုယ္တုိင္ျဖည့္စြက္၍ သင္တန္းတက္ေရာက္ခြင့္ျပဳပါရန္ မိမိဆႏၵ အရ ေလွ်ာက္ထားအပ္ပါသည္။</p>
        <div id="comments">
          <form method="POST" action="{{ route('monk_student.store') }}">
            {!! csrf_field() !!}
            <div class="one_third first">
              <label for="degree">သင္တန္းသားဘြဲ႔ေတာ္ <span>*</span></label>
              <input type="text" name="သင္တန္းသားဘြဲ႔ေတာ္" id="degree" value="{{old('သင္တန္းသားဘြဲ႔ေတာ္') }}" size="22">
              @if ($errors->has('သင္တန္းသားဘြဲ႔ေတာ္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('သင္တန္းသားဘြဲ႔ေတာ္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="name">အဖအမည္  <span>*</span></label>
              <input type="text" name="အဖအမည္" id="f_name" value="{{old('အဖအမည္')}}" size="22">
               @if ($errors->has('အဖအမည္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('အဖအမည္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="thatharnar_no">သာသနာ၀င္မွတ္တမ္းအမွတ္ </label>
              <input type="text" name="သာသနာ၀င္မွတ္တမ္းအမွတ္" id="thatharnar_no" value="{{old('သာသနာ၀င္မွတ္တမ္းအမွတ္')}}" size="22">
            </div>
            <div class="one_third first">
              <label for="birth_date">ေမြးသကၠရာဇ္ <span>*</span></label>
               <input type="date" name="ေမြးသကၠရာဇ္" value="{{old('ေမြးသကၠရာဇ္')}}" size="22">
               @if ($errors->has('ေမြးသကၠရာဇ္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ေမြးသကၠရာဇ္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="age">အသက္  <span>*</span></label>
              <input type="text" name="အသက္" id="age" value="{{old('အသက္')}}" size="22">
              @if ($errors->has('အသက္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('အသက္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="url">သိကၡာ </label>
              <input type="text" name="သိကၡာ" id="war_taw" value="{{old('သိကၡာ')}}" size="22">
            </div>
            <div class="block clear">
              <label for="school_address">ေက်ာင္းတုိက္ႏွင့္ေနရပ္လိပ္စာအျပည့္အစုံ</label>
              <textarea name="school_address" id="school_address" cols="25" rows="3">
                {{old('school_address')}}
              </textarea>
            </div>
            <div class="block clear">
              <label for="phone">ဆက္သြယ္ရန္ဖုန္း (Viber ဆက္သြယ္၍ရေသာဖုန္း) <span>*</span></label>
              <input type="text" name="ဆက္သြယ္ရန္ဖုန္း" id="phone" value="{{old('ဆက္သြယ္ရန္ဖုန္း')}}" size="22">
               @if ($errors->has('ဆက္သြယ္ရန္ဖုန္း'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ဆက္သြယ္ရန္ဖုန္း') }}</strong>
                  </span>
              @endif
            </div>
            <div class="block clear">
              <label for="email">E-mail ႏွင့္ Facebook <span>*</span></label>
              <input type="email" name="email" id="email" value="{{old('email')}}" size="22">
               @if ($errors->has('email'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="block clear">
              <label for="passed_date">ဓမၼာစရိယဘဲြ႔ရရွိသည့္ ခုႏွစ္သကၠရာဇ္ <span>*</span></label>
              <input type="date" name="ဓမၼာစရိယဘဲြ႔ရရွိသည့္ခုႏွစ္သကၠရာဇ္" id="passed_date" value="{{old('ဓမၼာစရိယဘဲြ႔ရရွိသည့္ခုႏွစ္သကၠရာဇ္')}}" size="22">
               @if ($errors->has('ဓမၼာစရိယဘဲြ႔ရရွိသည့္ခုႏွစ္သကၠရာဇ္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ဓမၼာစရိယဘဲြ႔ရရွိသည့္ခုႏွစ္သကၠရာဇ္') }}</strong>
                  </span>
              @endif
            </div>
            <div>
              <p>အထက္ပါအေၾကာင္းအရာမ်ားသည္ မွန္ကန္ပါသည္။</p>
              <p>သင္တန္းျပီးဆုံးေအာင္တက္ေရာက္မည္ျဖစ္ျပီး ေရွ႕ဆက္ေဆာင္ရြက္ရမည့္ အမ်ိဳးဘာသာ သာသနာဆုိင္ရာ လုပ္ငန္းမ်ားကိုလည္း ၾကိဳးစားေဆာင္ရြက္သြားပါမည္။</p>
              <p>သင္တန္း၌ ခ်မွတ္ထားေသာ စည္းမ်ဥ္းစည္းကမ္းမ်ားအတုိင္း လုိက္နာေနထုိင္ပါမည္။ အျပစ္ေပး အေရးယူဆုံးမသည္ကိုလည္း ၾကည္ျဖဴစြာလက္ခံမည္ ျဖစ္ပါေၾကာင္း ၀န္ခံကတိျပဳပါသည္။ </p>
            </div>
            <div>
              <input name="submit" type="submit" value="Submit Form">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
        </div>

        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter">
        <!-- ################################################################################################ -->
        @include('sidebar')
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ -->

@endsection
@section('scripts')
@parent
<!-- your custom script here -->
<script>
  $('.alert-success').fadeIn().delay(5000).fadeOut();
</script>
@endsection
