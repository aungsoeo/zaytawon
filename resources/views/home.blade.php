@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <article>
          <a href="education.php"><h3 class="font-x1"><i class="icon circle fa fa-bank"></i> &nbsp; စာသင္တုိက္ စာသင္သားမ်ားဆုိင္ရာ</h3></a>
          <p class="nospace">Quisque mollis nisl a hendrerit eleifend cum sociis natoque penatibus et magnis dis parturient <a href="#">read more &raquo;</a></p>
        </article>
      </div>
      <div class="one_third">
        <article>
          <a href="donars.php"><h3 class="font-x1"><i class="icon circle fa fa-book"></i> &nbsp; ႏွစ္စဥ္ရာသက္ပန္ေန႔ဆြမ္း အလွဴရွင္မ်ား</h3></a>
          <p class="nospace">Praesent vehicula ipsum erat at congue lorem placerat egestas nulla gravida vitae purus sit amet <a href="#">read more &raquo;</a></p>
        </article>
      </div>
      <div class="one_third">
        <article>
          <a href="people.php"><h3 class="font-x1"><i class="fa fa-location-arrow"></i> &nbsp; တရားပဲြပင့္ေလွ်ာက္လုိသူမ်ား</h3></a>
          <p class="nospace">Nunc et bibendum turpis mauris porta vehicula ipsum at maximus felis dapibus cras vitae dolor <a href="#">read more &raquo;</a></p>
        </article>
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>

<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="spacer">
    <div class="container clear"> 
      <!-- ################################################################################################ -->
      <div class="one_half first">
        <article>
          <h2 align="center"><b><font size="5px">ပဓာနနာယကဆရာေတာ္</font></b></h2>
          <h2 align="center">ေဒါက္တာအရွင္ေသာပါက၏ ေထရုပတၱိအက်ဥ္း</h2>
          <p>Duis accumsan metus vel faucibus fermentum! Sed eget nibh fermentum risus molestie pellentesque. Ut porttitor lorem ut sapien lobortis, vitae blandit velit gravida. Fusce consectetur lectus eget sapien ornare, ut condimentum enim posuere.</p>
          <p class="btmspace-30">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus posuere ac quam id pretium vivamus justo enim tincidunt at tristique in.</p>
          <p>Vestibulum non nisl non risus vehicula consequat a eu ipsum. Donec in rutrum felis! Maecenas vitae mattis quam, a congue odio. Donec nec mauris turpis.</p>
          <p><a class="btn" href="#">Luctus purus nibh</a></p>
        </article>
      </div>
      <div class="one_half"><a href="#"><img src="images/demo/500x400.png" alt=""></a></div>
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->

@endsection