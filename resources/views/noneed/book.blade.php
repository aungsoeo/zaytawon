@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
<style type="text/css">
  .alert-danger{
  display: block;
  background: #eee;
}
.alert-success{
  display: block;
  background: #efefef;
  color: green;
}
</style>
@endsection

@section('content')

<!-- ################################################################################################ -->
<div class="nextfooter">
   <div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

     <div id="content" class="three_quarter first"> 
     <div id="comments">
          <h2>ေက်ာင္း၀င္ခြင့္ပုံစံ (Student Registration Form)</h2>

          <!-- for valaditor -->
          @if ( count( $errors ) > 0 )
            <div class=" alert-danger">
                @foreach ($errors->all() as $error)
                    *{{ $error }}*<br>        
                @endforeach
            </div>
          @endif

          <!-- for success message -->
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
             @endif

          <form action="{{ route('book.postbook') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">     

            <div class="one_third first">            
              <label>နာမည္ (Name) <span>*</span></label>
              <input type="text" value="" size="22" name="name">
            </div>
            <div class="one_third">
              <label>အဖအမည္ (Father’s Name) <span>*</span></label>
              <input type="text" value="" size="22" name="father_name">
            </div>
            <div class="one_third">
              <label>အဖမွတ္ပုံတင္ (Father’s NRC) <span></span></label>
              <input type="text" value="" size="22" name="father_nrc">
            </div>
            <div class="one_third first">
              <label>၇တန္းေအာင္ခဲ့သည့္ေက်ာင္း <span>*</span></label>
              <input type="text" value="" size="22" name="passed_school">
            </div>
            <div class="one_third">
              <label>ခုံနံပါတ္ <span>*</span></label>
              <input type="text" value="" size="22" name="roll_no">
            </div>
            <div class="one_third">
              <label>ဆက္သြယ္ရမည့္ဖုန္းနံပါတ္ </label>
              <input type="text" value="" size="22" name="phone_no'">
            </div>

            <div class="one_third first">
              <label>Gender <span>*</span></label>
              <select width="300px" name="gender">
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <div class="one_third">
              <label>Email <span>*</span> </label>
              <input type="email" value="" size="22" name="email" required="required">
            </div>
            <div class="block clear">
              <label for="comment">လိပ္စာ (Address) <span>*</span></label>
              <textarea  id="comment" cols="25" rows="10" name=" address"></textarea>
            </div>
            <div>
              <input name="" type="submit" value="Submit Form">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
      </div>
    </div>  
  <!-- ################################################################################################ -->  
    <div class="one_quarter sidebar"> 
    {!! MyFuncs::getNewsSideBar(); !!}
    </div>
      <!-- ################################################################################################ -->
      <!-- <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav> -->
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
      <div class="innerfooter">
      <h2 class="title">မေဟာ္သဓာ ေက်ာင္းသားမ်ား လုိက္နာရမည့္စည္းကမ္း</h2>
      <ol>
        <li>၀င္ခြင့္စာေမးပဲြေအာင္ျမင္ေသာ ေက်ာင္းသား/သူ သာေက်ာင္းတက္ခြင့္ရွိသည္။</li>
        <li>ေက်ာင္းတက္ (၇၅%) ျပည့္မီမွသာ စာေမးပဲြေျဖဆုိခြင့္ ရရွိမည္ျဖစ္သည္။</li>
        <li>သတ္မွတ္ထားေသာ ေက်ာင္း၀တ္စုံႏွင့္တံဆိပ္ကို ေန႔စဥ္၀တ္ဆင္ရမည္။</li>
        <li>ဆံပင္ကို သပ္ရပ္စြာထားရမည္။ ေဆးမဆုိးရ။</li>
        <li>စာသင္ခန္းကို သပ္ရပ္စြာထားရမည္။</li>
        <li>ေက်ာင္းပုိင္ပစၥည္းမ်ားကို ရိုေသစြာကိုင္တြယ္ရမည္၊ ပ်က္စီးပါက တန္းဘုိးအတိုင္းေပးေလ်ာ္ရမည္။</li>
        <li>ေက်ာင္းသုံးပစၥည္းမ်ားကို တန္ဖိုးထားသုံးစြဲရန္ႏွင့္ အမွန္တကယ္လုိအပ္မွသာ ထုတ္ယူခြင့္ရယူျပီး ထုတ္ယူရန္။</li>
        <li>စာသင္ခ်ိန္တုိင္းတြင္ ဘာသာရပ္အားလုံးကို ဂရုတစိုက္ သင္ယူမွတ္သားရမည္။ အိမ္စာမ်ားကို မပ်က္မကြက္ ျပဳလုပ္ရမည္။</li>
        <li>ဆရာ၊ ဆရာမခြင့္ျပဳခ်က္မရဘဲ အတန္းျပင္ပသို႔ထြက္ျခင္း၊ ၀င္ျခင္းမျပဳလုပ္ရ။</li>
        <li>သက္ဆုိင္ရာဆရာ၏ ခြင့္ျပဳခ်က္မရဘဲ သိပၸံလက္ေတြ႕ခန္းသုိ႔မ၀င္ရ။ သိပၸံလက္ေတြ႕ျပဳလုပ္သည့္အခါ ဓါတ္ေဆးမ်ားကို ဆရာညႊန္ၾကားခ်က္ျဖင့္သာ စနစ္တက်ကိုင္တြယ္သုံးစြဲရမည္။</li>
        <li>ေက်ာင္းလုပ္ငန္းမ်ားတြင္ စနစ္တက်ပါ၀င္လုပ္ေဆာင္ရမည္။</li>
        <li>ေန႔စဥ္သင္ၾကားေပးေသာ စာရိတၱပညာသင္တန္းကို၎၊ အပတ္စဥ္သင္တန္းမ်ားျဖစ္ေသာ 4 skills သင္တန္းကို၎၊ computer သင္တန္းမ်ားကိုမပ်က္မကြက္ တက္ေရာက္ရမည္။</li>
        <li>ေက်ာင္းသား/သူအခ်င္းခ်င္းျဖစ္ေစ၊ ဆရာ/မမ်ားႏွင့္ျဖစ္ေစ၊ ယဥ္ေက်းသိမ္ေမြ႔စြာ ဆက္ဆံေျပာဆုိေနထုိင္ရမည္။</li>
        <li>အပတ္စဥ္ ၾကာသပေတးေန႔တြင္ ဥပုသ္သီတင္းေဆာက္တည္ရမည္။</li>
        <li>ပညာေရးမူ၀ါဒႏွင့္ မကိုက္ညီေသာအသင္းအဖြဲ႔မ်ားတြင္ ပါ၀င္ျခင္းမျပဳလုပ္ရ။</li>
        <li>ေအာက္ပါစည္းကမ္းမ်ားအနက္ တစ္ခုခုက်ဴးလြန္ပါက ေက်ာင္းမွထုတ္ပယ္ျခင္းခံရမည္။
          <ul>
            <li>ေက်ာင္းအုပ္ၾကီးႏွင့္ ဆရာ/မမ်ား၏ ဂုဏ္သိကၡာ ပ်က္ျပားေအာင္ျပဳလုပ္ျခင္း။</li>
            <li>ေသြးထြက္သံယုိျဖစ္ေလာက္ေသာ ခုိက္ရန္ျဖစ္ျခင္း။</li>
            <li>သူတပါးပစၥည္းခိုးယူျခင္း။</li>
          </ul>
        </li>
      </ol>
      </div>
    </main>
  </div>
</div> 
<!-- ################################################################################################ -->

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
  $('.alert-success').fadeIn().delay(5000).fadeOut();
</script>
@endsection