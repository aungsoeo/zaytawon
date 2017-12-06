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
        <!-- <img class="imgr borderedbox inspace-5" src="images/demo/imgr.gif" alt=""> -->
        <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>
        <p>Dapiensociis <a href="#">temper donec auctortortis cumsan</a> et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem.</p>
        <hr><br>
        <h1 align="center">စာသင္သားသံဃာမ်ား ၀င္ခြင့္ပုံစံ</h1>
        <div id="comments">
          <form action="#" method="post">
            <div class="one_third first">
              <label for="name">ေလွ်ာက္ထားသူ၏ ဘဲြ႔အမည္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">အသက္ သိကၡာ  <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22" placeholder="ႏွစ္၊ ၊ ၀ါ">
            </div>
            <div class="one_third">
              <label for="url">ေမြးသကၠရာဇ္</label>
              <input type="text" name="url" id="url" value="" size="22" placeholder="ခုႏွစ္၊ လဆန္း/ဆုတ္ (   )ရက္၊ ေန႔">
            </div>
            <div class="block clear">
              <label for="comment">ေမြးရပ္ဇာတိ</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
            <div class="block clear">
              <label for="name">သာသနာ၀င္မွတ္တမ္းအမွတ္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">မူလသီတင္းသုံးရာေက်ာင္းတုိက္ ေနရပ္လိပ္စာ</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
            <div class="block clear">
              <label for="comment">ဥပဇၥ်ယ္ဆရာေတာ္ဘြဲ႔အမည္ႏွင့္ ေနရပ္လိပ္စာ</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
            <div class="block clear">
              <label for="comment">ေနထုိင္ခဲ့ဘူးေသာေက်ာင္းတုိက္မ်ား</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
            <div class="block clear">
              <label for="comment">ေနာက္ဆုံးေနထုိင္ပညာသင္ၾကားခဲ့ေသာ ေက်ာင္းတုိက္ႏွင့္လိပ္စာ</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
             <div class="block clear">
              <label for="comment">အဘအမည္ႏွင့္ ေနရပ္လိပ္စာ</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
            <div class="block clear">
              <label for="name">အျမင့္ဆုံးေအာင္ျမင္ခဲ့သည့္ အစုိးရစာေမးပဲြ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
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
@endsection