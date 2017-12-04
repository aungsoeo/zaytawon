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
        <h1 align="center"><b><font size="5px">တရားပဲြပင့္ေလွ်ာက္လုိ သူမ်ား</font></b></h1>
        <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>
        <p>Dapiensociis <a href="#">temper donec auctortortis cumsan</a> et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem.</p>
        <hr><br>
        <h1 align="center">ျဖည့္စြက္ရမည့္အခ်က္မ်ား</h1>
        <div id="comments">
          <form action="#" method="post">
            <div class="block clear">
              <label for="name">တရားပဲြက်င္းပရျခင္း အေၾကာင္းအရင္းေခါင္းစဥ္ / အထိမ္းအမွတ္ (မိဘေက်းဇူးဆပ္တရားပဲြ၊ ေက်ာင္းေရစက္ခ်၊ ဆြမ္းေလာင္း ေအာင္ပဲြ၊ အထူးတရားပဲြ…စသည္) </label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">တရားပဲြက်င္းပမည့္ေနရာ (တည္ေနရာ)</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>
            <div class="block clear">
              <label for="email">တရားပဲြက်င္းပမည့္ရက္၊ (အဂၤလိပ္၊ ျမန္မာရက္မ်ားကို တိက်စြာေရးသားပါ) <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">တရားပြဲပင့္ေလွ်ာက္သူ တာ၀န္ခံ၏အမည္ႏွင့္ ေနရပ္လိပ္စာအျပည့္အစုံ</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
            </div>     
            <div class="block clear">
              <label for="name">တုိက္ရိုက္ဆက္သြယ္လုိ႔ရႏုိင္မည့္ ဖုန္းနံပါတ္ <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">ၾကိဳဆုိပင့္ေဆာင္မည့္ အေနအထားကို တင္ျပပါ။</label>
              <textarea name="comment" id="comment" cols="25" rows="3"></textarea>
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

@section('scripts')
@parent
<!-- your custom script here -->
@endsection