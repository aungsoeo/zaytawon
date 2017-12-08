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
        <h1 align="center"><b><font size="5px">စာသင္တုိက္ စာသင္သား မ်ားဆုိင္ရာ</font></b></h1>
        <!-- for success message -->
        @if ($message = Session::get('success'))
          <div class="alert-success" style=" display: block; background: #efefef;
  color: green; ">
              <p >{{ $message }}</p>
          </div>
         @endif
        <!-- <img class="imgr borderedbox inspace-5" src="images/demo/imgr.gif" alt=""> -->
        @foreach($posts as $p)
        <p>{!!$p->title!!}</p>
        <p>{!!$p->short_description!!}</p>
        <p>{!!$p->detail_description!!}</p>
        <hr>
        @endforeach
        <br>
        {{$posts->render()}}
        <br>

        <h1 align="center">စာသင္သားသံဃာမ်ား ၀င္ခြင့္ပုံစံ</h1>
        <div id="comments">
          <form method="POST" action="{{ route('monk_entrace.store') }}">
            {!! csrf_field() !!}
            <div class="one_third first">
              <label for="ဘဲြ႔အမည္">ေလွ်ာက္ထားသူ၏ ဘဲြ႔အမည္ <span>*</span></label>
              <input type="text" name="ဘဲြ႔အမည္" id="name" value="{{old('ဘဲြ႔အမည္')}}" size="22">
              @if ($errors->has('ဘဲြ႔အမည္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ဘဲြ႔အမည္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="အသက္">အသက္<span>*</span></label>
              <input type="text" name="အသက္" id="age" value="{{old('အသက္')}}" size="22" placeholder="ႏွစ္">
              @if ($errors->has('အသက္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('အသက္') }}</strong>
                  </span>
              @endif
            </div>
              <div class="one_third">
              <label for=" သိကၡာ">သိကၡာ  <span>*</span></label>
              <input type="text" name="သိကၡာ" id="war" value="{{old('သိကၡာ')}}" size="22" placeholder="၀ါ">
              @if ($errors->has('သိကၡာ'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('သိကၡာ') }}</strong>
                  </span>
              @endif
            </div>
            <div class="block clear">
              <label for="ေမြးသကၠရာဇ္">ေမြးသကၠရာဇ္</label>
              <input type="text" name="ေမြးသကၠရာဇ္" id="birth_date" value="{{old('ေမြးသကၠရာဇ္')}}" size="22" placeholder="ခုႏွစ္၊ လဆန္း/ဆုတ္ (   )ရက္၊ ေန႔">
            </div>
            <div class="block clear">
              <label for="ေမြးရပ္ဇာတိ">ေမြးရပ္ဇာတိ</label>
              <textarea name="ေမြးရပ္ဇာတိ" id="birth_place" cols="25" rows="3">{{old('ေမြးရပ္ဇာတိ')}}</textarea>
            </div>
            <div class="block clear">
              <label for="name">သာသနာ၀င္မွတ္တမ္းအမွတ္ <span>*</span></label>
              <input type="text" name="သာသနာ၀င္မွတ္တမ္းအမွတ္" id="thatharnar_no" value="{{old('သာသနာ၀င္မွတ္တမ္းအမွတ္')}}" size="22">
               @if ($errors->has('သာသနာ၀င္မွတ္တမ္းအမွတ္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('သာသနာ၀င္မွတ္တမ္းအမွတ္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="block clear">
              <label for="address">မူလသီတင္းသုံးရာေက်ာင္းတုိက္ ေနရပ္လိပ္စာ</label>
              <textarea name="မူလသီတင္းသုံးရာေက်ာင္းတုိက္" id="address" cols="25" rows="3">{{old('မူလသီတင္းသုံးရာေက်ာင္းတုိက္')}}</textarea>
            </div>
            <div class="block clear">
              <label for="comment">ဥပဇၥ်ယ္ဆရာေတာ္ဘြဲ႔အမည္ႏွင့္ ေနရပ္လိပ္စာ</label>
              <textarea name="ဥပဇၥ်ယ္ဆရာေတာ္ဘြဲ႔အမည္ႏွင္ေနရပ္လိပ္စာ" id="defree_address" cols="25" rows="3">{{old('ဥပဇၥ်ယ္ဆရာေတာ္ဘြဲ႔အမည္ႏွင္ေနရပ္လိပ္စာ')}}</textarea>
            </div>
            <div class="block clear">
              <label for="comment">ေနထုိင္ခဲ့ဘူးေသာေက်ာင္းတုိက္မ်ား</label>
              <textarea name="ေနထုိင္ခဲ့ဘူးေသာေက်ာင္းတုိက္မ်ား" id="lived_monastery" cols="25" rows="3">{{old('ေနထုိင္ခဲ့ဘူးေသာေက်ာင္းတုိက္မ်ား')}}</textarea>
            </div>
            <div class="block clear">
              <label for="comment">ေနာက္ဆုံးေနထုိင္ပညာသင္ၾကားခဲ့ေသာ ေက်ာင္းတုိက္ႏွင့္လိပ္စာ</label>
              <textarea name="ေနာက္ဆုံးေနထုိင္ပညာသင္ၾကားခဲ့ေသာေက်ာင္းတုိက္ႏွင့္လိပ္စာ" id="last_live_address" cols="25" rows="3">{{old('ေနာက္ဆုံးေနထုိင္ပညာသင္ၾကားခဲ့ေသာေက်ာင္းတုိက္ႏွင့္လိပ္စာ')}}</textarea>
            </div>
             <div class="block clear">
              <label for="comment">အဘအမည္ႏွင့္ ေနရပ္လိပ္စာ</label>
                <div>
                  <input type="text" name="အဘအမည္" value="{{old('အဘအမည္')}}" placeholder="အဘအမည္" size="">
                </div>
                <div>
                  <textarea name="ေနရပ္လိပ္စာ" id="address" cols="" rows="" placeholder="ေနရပ္လိပ္စာ">{{old('ေနရပ္လိပ္စာ')}}</textarea>
                </div>
            </div>
            <div class="block clear">
              <label for="name">အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္ အစုိးရစာေမးပဲြ <span>*</span></label>
              <input type="text" name="အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ" id="exam" value="{{old('အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ')}}" size="22" >
              @if ($errors->has('အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္အစုိးရစာေမးပဲြ') }}</strong>
                  </span>
              @endif
            </div>
            <div>
              <p>ဘုရားတပည့္ေတာ္အား ေဇတ၀န္ဓမၼာရုံေက်ာင္းတုိက္၌ အတြင္းေနစာသင္တုိက္သားအျဖစ္ ေနထုိင္ခြင့္ျပဳပါရန္ ေလွ်ာက္ထားအပ္ ပါသည္ဘုရား။</p>
              <p>ခ်မွတ္ထားေသာ စည္းမ်ဥ္းစည္ကမ္းမ်ားႏွင့္အညီ လုိက္နာေနထုိင္သူျဖစ္ေၾကာင္း၊ အျပစ္ရွိ၍ အျပစ္ေပးအေရးယူသည္ကိုလည္း ၾကည္ျဖဴစြာ လက္ခံႏုိင္သူျဖစ္ေၾကာင္း ၀န္ခံကတိျပဳပါသည္ဘုရား။</p>
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
<!-- your custom script here -->
<script>
  $('.alert-success').fadeIn().delay(5000).fadeOut();
</script>
@endsection
