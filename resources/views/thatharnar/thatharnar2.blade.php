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
        @foreach($thatharnar2 as $t)
        <h1 align="center"><b><font size="5px">{!!$t->title!!}</font></b></h1>
        <!-- <img class="imgr borderedbox inspace-5" src="images/demo/imgr.gif" alt=""> -->
        <p align="justify">{!!$t->short_description!!}</p>
        <p>{!!$t->detail_description!!}</p>
        <hr><br>
        @endforeach
        <h1 align="center">သင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာ</h1>
        <p>အေၾကာင္းအရာ။ ။သင္တန္းတက္ေရာက္ခြင့္ျပဳပါရန္ ေလွ်ာက္ထားျခင္း။</p>
        <p>ဘုရားတပည့္ေတာ္သည္ ေအာက္ေဖာ္ျပပါ အခ်က္အလက္မ်ား ကိုယ္တုိင္ျဖည့္စြက္၍ သင္တန္းတက္ေရာက္ခြင့္ျပဳပါရန္ မိမိဆႏၵ အရ ေလွ်ာက္ထားအပ္ပါသည္။</p>
        <div id="comments">
          <form action="#" method="post">
            <div class="one_third first">
              <label for="name">သင္တန္းသားဘြဲ႔ေတာ္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">အဖအမည္  <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="one_third">
              <label for="url">သာသနာ၀င္မွတ္တမ္းအမွတ္ </label>
              <input type="text" name="url" id="url" value="" size="22">
            </div>
            <div class="one_third first">
              <label for="name">ေမြးသကၠရာဇ္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">အသက္  <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="one_third">
              <label for="url">သိကၡာ </label>
              <input type="text" name="url" id="url" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">ေက်ာင္းတုိက္ႏွင့္ေနရပ္လိပ္စာအျပည့္အစုံ</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
            <div class="block clear">
              <label for="name">ဆက္သြယ္ရန္ဖုန္း (Viber ဆက္သြယ္၍ရေသာဖုန္း) <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>      
            <div class="block clear">
              <label for="name">E-mail ႏွင့္ Facebook <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="block clear">
              <label for="name">ဓမၼာစရိယဘဲြ႔ရရွိသည့္ ခုႏွစ္သကၠရာဇ္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
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
        <div class="sdb_holder">
          <a href="education.php"><h6><i class="icon circle fa fa-bank"></i>&nbsp;စာသင္တုိက္ စာသင္သား မ်ားဆုိင္ရာ</h6></a>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        </div>
        <hr>
        <br>
        <div class="sdb_holder">
          <article>
            <a href="donars.php"><h6><i class="icon circle fa fa-book"></i> &nbsp;ႏွစ္စဥ္ရာသက္ပန္ေန႔ဆြမ္း အလွဴရွင္မ်ား</h6></a>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          </article>
        </div>
        <hr>
        <br>
        <div class="sdb_holder">
          <article>
            <a href="people.php"><h6><i class="fa fa-location-arrow"></i> &nbsp;တရားပဲြပင့္ေလွ်ာက္လုိ သူမ်ား</h6></a>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          </article>
        </div>
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