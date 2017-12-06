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
          <form action="#" method="post">
            <div class="one_third first">
              <label for="name">အမည္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">အဖအမည္  <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="one_third">
              <label for="url">အမိအမည္ <span>*</span></label>
              <input type="text" name="url" id="url" value="" size="22">
            </div>
            <div class="one_third first">
              <label for="name">လူမ်ိဳး <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">ကိုးကြယ္သည့္ဘာသာ  <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">ေနရပ္လိပ္စာ အျပည့္အစုံ</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
            <div class="one_third first">
              <label for="name">ေမြးသကၠရာဇ္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="block clear">
              <label for="email">ႏုိင္ငံသားစီစစ္ေရး (မွတ္ပုံတင္) အမွတ္  <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="block clear">
              <label for="name">တကၠသိုလ္၀င္တန္း ေအာင္ျမင္ခဲ့သည့္ ခုႏွစ္သကၠရာဇ္ႏွင့္ ေအာင္ျမင္ခဲ့သည့္ေက်ာင္းအမည္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>      
            <div class="block clear">
              <label for="name">ယခင္ႏွစ္က ဤသင္တန္းေက်ာင္းတြင္ တက္ေရာက္ဖူးသည္ / မတက္ေရာက္ဖူးပါ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="block clear">
              <label for="name">ဆက္သြယ္ရန္ဖုန္း <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
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
@endsection