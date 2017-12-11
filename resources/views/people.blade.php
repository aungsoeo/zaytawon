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

        <h1 align="center"><b><font size="5px">တရားပဲြပင့္ေလွ်ာက္လုိ သူမ်ား</font></b></h1>
        <ol>
            @foreach($people as $p)
            <li>
              တရားပြဲပင့္ေလွ်ာက္သူ တာ၀န္ခံ၏အမည္&nbsp;&nbsp;&nbsp;<i class="fa fa-user">:&nbsp;&nbsp;&nbsp; {{$p->c_name }}</i><br>
              တရားပြဲဲက်င္းပမည့္ရက္&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar" aria-hidden="true">
                  <small>:&nbsp;&nbsp;&nbsp; {{$p->date}}</small>
              </i><br>
             တရားပဲြက်င္းပမည့္ေနရာ&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true">
                   <small>:&nbsp;&nbsp;&nbsp; {{$p->place}}</small>
              </i>
            </li>
            <br>
            @endforeach
        </ol>
        {{$people->render()}}
          <hr>
          <h1 align="center">ျဖည့္စြက္ရမည့္အခ်က္မ်ား</h1>
          <div id="comments">
            <form action="{{ route('people.store') }}" method="post">
               {!! csrf_field() !!}
              <div class="block clear">
                <label for="name">တရားပဲြက်င္းပရျခင္း အေၾကာင္းအရင္းေခါင္းစဥ္ / အထိမ္းအမွတ္ (မိဘေက်းဇူးဆပ္တရားပဲြ၊ ေက်ာင္းေရစက္ခ်၊ ဆြမ္းေလာင္း ေအာင္ပဲြ၊ အထူးတရားပဲြ…စသည္) </label>
                <input type="text" name="အေၾကာင္းအရင္းေခါင္းစဥ္" id="reason" value="{{old('း အေၾကာင္းအရင္းေခါင္းစဥ္')}}" size="22">
              </div>
              <div class="block clear">
                <label for="comment">တရားပဲြက်င္းပမည့္ေနရာ (တည္ေနရာ)</label>
                <textarea name="တည္ေနရာ" id="location" cols="25" rows="3">{{old('တည္ေနရာ')}}</textarea>
              </div>
              <div class="block clear">
                <label for="date">တရားပဲြက်င္းပမည့္ရက္၊ (အဂၤလိပ္၊ ျမန္မာရက္မ်ားကို တိက်စြာေရးသားပါ) <span>*</span></label>
                <input type="text" name="တရားပဲြက်င္းပမည့္ရက္" id="date" value="{{old('တရားပဲြက်င္းပမည့္ရက္')}}" size="22">
                @if ($errors->has('တရားပဲြက်င္းပမည့္ရက္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('တရားပဲြက်င္းပမည့္ရက္') }}</strong>
                  </span>
                @endif
              </div>
              <div class="block clear">
                <label for="comment">တရားပြဲပင့္ေလွ်ာက္သူ တာ၀န္ခံ၏အမည္</label>
                <input type="text" name="တာ၀န္ခံ၏အမည္" id="name" cols="25" rows="3" value="{{old('တာ၀န္ခံ၏အမည္')}}">
              </div> 
              <div class="block clear">
                <label for="comment">တရားပြဲပင့္ေလွ်ာက္သူ ေနရပ္လိပ္စာအျပည့္အစုံ</label>
                <textarea name="ေနရပ္လိပ္စာ" id="addrress" cols="25" rows="3">{{old('ေနရပ္လိပ္စာ')}}</textarea>
              </div>     
              <div class="block clear">
                <label for="name">တုိက္ရိုက္ဆက္သြယ္လုိ႔ရႏုိင္မည့္ ဖုန္းနံပါတ္ <span>*</span></label>
                <input type="text" name="ဖုန္းနံပါတ္" id="name" value="{{old('ဖုန္းနံပါတ္')}}" size="22">
                 @if ($errors->has('ဖုန္းနံပါတ္'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('ဖုန္းနံပါတ္') }}</strong>
                  </span>
                @endif
              </div>
              <div class="block clear">
                <label for="comment">ၾကိဳဆုိပင့္ေဆာင္မည့္ အေနအထားကို တင္ျပပါ။</label>
                <textarea name="အေနအထား" id="comment" cols="25" rows="3">{{old('အေနအထား')}}</textarea>
              </div> 
              <div>
                <p>အေၾကာင္းအမ်ိဳးမ်ိဳးေၾကာင့္ ရက္ေရႊ႕လုိျခင္း၊ ပ်က္ကြက္ျခင္းမ်ားျဖစ္ေပၚလာပါက ၾကိဳတင္၍ အသိေပး အေၾကာင္းၾကားပါ။ </p>
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