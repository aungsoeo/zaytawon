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
        <!-- for success message -->
        @if ($message = Session::get('success'))
          <div class="alert-success" style=" display: block; background: #efefef;
  color: green; ">
              <p >{{ $message }}</p>
          </div>
         @endif
        <!-- ################################################################################################ -->
        @foreach($posts as $e)
          <h1 align="center"><b><font size="5px">{{$e->title}}</font></b></h1>
          <p>{{$e->short_description}}</p>
          <p>{!! $e->detail_description !!}</p>
          <hr><br>
        @endforeach
        @foreach($rule as $r)
        <h1 align="center">{{$r->title}}</h1>
        <p>{{ $r->short_description }}</p>
        <p>{!! $r->detail_description !!}</p>
        <hr><br>
        @endforeach
        <h1 align="center">ကြန္ပ်ဴတာသင္တန္း ၀င္ခြင့္ေလွ်ာက္ထားလႊာပုံစံ</h1>
        <div id="comments">
          <form action="{{ route('pyinnyardarna.store') }}" method="post">
            {!! csrf_field() !!}
            <div class="one_third first">
              <label for="name">အမည္ <span>*</span></label>
              <input type="text" name="အမည္" id="name" value="{{old('အမည္')}}" size="22">
              @if ($errors->has('အမည္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('အမည္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="f_name">အဖအမည္  <span>*</span></label>
              <input type="text" name="အဖအမည္" id="f_name" value="{{old('အဖအမည္')}}" size="22">
              @if ($errors->has('အဖအမည္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('အဖအမည္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="m_name">အမိအမည္ <span>*</span></label>
              <input type="text" name="အမိအမည္" id="m_name" value="{{old('အမိအမည္')}}" size="22">
              @if ($errors->has('အမိအမည္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('အမိအမည္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third first">
              <label for="race">လူမ်ိဳး <span>*</span></label>
              <input type="text" name="လူမ်ိဳး" id="race" value="{{old('လူမ်ိဳး')}}" size="22">
              @if ($errors->has('လူမ်ိဳး'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('လူမ်ိဳး') }}</strong>
                  </span>
              @endif
            </div>
            <div class="one_third">
              <label for="reg">ကိုးကြယ္သည့္ဘာသာ  <span>*</span></label>
              <input type="text" name="ကိုးကြယ္သည့္ဘာသာ" id="reg" value="{{old('ကိုးကြယ္သည့္ဘာသာ')}}" size="22">
              @if ($errors->has('ကိုးကြယ္သည့္ဘာသာ'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ကိုးကြယ္သည့္ဘာသာ') }}</strong>
                  </span>
              @endif
            </div>
            <div class="block clear">
              <label for="address">ေနရပ္လိပ္စာ အျပည့္အစုံ</label>
              <textarea name="ေနရပ္လိပ္စာ" id="address" cols="25" rows="3">{{old('ေနရပ္လိပ္စာ')}}</textarea>
            </div>
            <div class="one_third first">
              <label for="birth_date">ေမြးသကၠရာဇ္ <span>*</span></label>
              <input type="date" name="ေမြးသကၠရာဇ္" id="birth_date" value="{{old('ေမြးသကၠရာဇ္')}}" size="22">
              @if ($errors->has('ေမြးသကၠရာဇ္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ေမြးသကၠရာဇ္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="block clear">
              <label for="nrc">ႏုိင္ငံသားစီစစ္ေရး (မွတ္ပုံတင္) အမွတ္  <span>*</span></label>
              <input type="text" name="ႏုိင္ငံသားစီစစ္ေရးအမွတ္" id="nrc" value="{{old('ႏုိင္ငံသားစီစစ္ေရးအမွတ္')}}" size="22">
              @if ($errors->has('ႏုိင္ငံသားစီစစ္ေရးအမွတ္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ႏုိင္ငံသားစီစစ္ေရးအမွတ္') }}</strong>
                  </span>
              @endif
            </div>
            <div class="block clear">
              <label for="name">တကၠသိုလ္၀င္တန္း ေအာင္ျမင္ခဲ့သည့္ ခုႏွစ္သကၠရာဇ္ႏွင့္ ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္ <span>*</span></label>
              <input type="text" name="တကၠသိုလ္၀င္တန္းေအာင္ျမင္ခဲ့သည့္ခုႏွစ္သကၠရာဇ္ႏွင့္ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္" id="name" value="{{old('တကၠသိုလ္၀င္တန္းေအာင္ျမင္ခဲ့သည့္ခုႏွစ္သကၠရာဇ္ႏွင့္ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္')}}" size="22">
              @if ($errors->has('တကၠသိုလ္၀င္တန္းေအာင္ျမင္ခဲ့သည့္ခုႏွစ္သကၠရာဇ္ႏွင့္ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('တကၠသိုလ္၀င္တန္းေအာင္ျမင္ခဲ့သည့္ခုႏွစ္သကၠရာဇ္ႏွင့္ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္') }}</strong>
                  </span>
              @endif
            </div>      
            <div class="block clear">
              <label for="name">ယခင္ႏွစ္က ဤသင္တန္းေက်ာင္းတြင္ တက္ေရာက္ဖူးသည္ / မတက္ေရာက္ဖူးပါ <span>*</span></label>
              <input type="text" name="ဤသင္တန္းေက်ာင္းတြင္တက္ေရာက္ဖူးျခင္းရွိမရွိ" id="name" value="{{old('ဤသင္တန္းေက်ာင္းတြင္တက္ေရာက္ဖူးျခင္းရွိမရွိ')}}" size="22">
               @if ($errors->has('ဤသင္တန္းေက်ာင္းတြင္တက္ေရာက္ဖူးျခင္းရွိမရွိ'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ဤသင္တန္းေက်ာင္းတြင္တက္ေရာက္ဖူးျခင္းရွိမရွိ') }}</strong>
                  </span>
              @endif
            </div>
            <div class="block clear">
              <label for="name">ဆက္သြယ္ရန္ဖုန္း <span>*</span></label>
              <input type="text" name="ဆက္သြယ္ရန္ဖုန္း" id="name" value="{{old('ဆက္သြယ္ရန္ဖုန္း')}}" size="22">
               @if ($errors->has('ဆက္သြယ္ရန္ဖုန္း'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ဆက္သြယ္ရန္ဖုန္း') }}</strong>
                  </span>
              @endif
            </div>
            <div>
              <p>ဤသင္တန္းေက်ာင္း၌ ခ်မွတ္ထားေသာ စည္းမ်ဥ္းစည္းကမ္းမ်ားအတုိင္း လုိက္နာေနထုိင္ပါမည္။ အျပစ္ေပး၍ ဆုံးမသည္ကိုလည္း ၾကည္ျဖဴစြာ လက္ခံမည္ျဖစ္ပါေၾကာင္း ၀န္ခံကတိျပဳပါသည္။ </p>
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