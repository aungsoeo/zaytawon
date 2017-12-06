@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="bgslideshow">
    <ul>
      <!-- ################################################################################################ -->
      <li class="bgded" style="background-image:url({{ asset('images/demo/slider/01.png') }})"><em>text 1</em></li>
      <li class="bgded" style="background-image:url({{ asset('images/demo/slider/02.png') }})"><em>text 2</em></li>
      <li class="bgded" style="background-image:url({{ asset('images/demo/slider/03.png') }})"><em>text 3</em></li>
      <li class="bgded" style="background-image:url({{ asset('images/demo/slider/01.png') }})"><em>text 4</em></li>
      <li class="bgded" style="background-image:url({{ asset('images/demo/slider/02.png') }})"><em>text 5</em></li>
      <li class="bgded" style="background-image:url({{ asset('images/demo/slider/03.png') }})"><em>text 6</em></li>
      <!-- ################################################################################################ -->
    </ul>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <article>
          <a href="{{route('user.category', ['category' => 'education'])}}"><h3 class="font-x1"><i class="icon circle fa fa-bank"></i> &nbsp; စာသင္တုိက္ စာသင္သားမ်ားဆုိင္ရာ</h3></a>
          <p class="nospace">စာသင္တုိက္ စာသင္သားမ်ားဆုိင္ရာ အေၾကာင္းအရာမ်ားကို ၾကည့္ရွုရန္......<a href="{{route('user.category', ['category' => 'education'])}}">read more &raquo;</a></p>
        </article>
      </div>
      <div class="one_third">
        <article>
          <a href="{{route('user.category', ['category' => 'donor'])}}"><h3 class="font-x1"><i class="icon circle fa fa-book"></i> &nbsp; ႏွစ္စဥ္ရာသက္ပန္ေန႔ဆြမ္း အလွဴရွင္မ်ား</h3></a>
          <p class="nospace">ႏွစ္စဥ္ရာသက္ပန္ေန႔ဆြမ္း အလွဴရွင္မ်ား ကို ၾကည့္ရွုရန္..<a href="{{route('user.category', ['category' => 'donor'])}}">read more &raquo;</a></p>
        </article>
      </div>
      <div class="one_third">
        <article>
          <a href="{{route('user.category', ['category' => 'people'])}}"><h3 class="font-x1"><i class="fa fa-location-arrow"></i> &nbsp; တရားပဲြပင့္ေလွ်ာက္လုိသူမ်ား</h3></a>
          <p class="nospace">တရားပြဲပင့္ေလ်ာက္လိုသူမ်ား စာရင္းၾကည့္ရွုရန္.....<br> <a href="#">read more &raquo;</a></p>
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
      @foreach($posts as $f)
      <div class="one_half first">
        <article>
          <h2 align="center"><b><font size="5px">ပဓာနနာယကဆရာေတာ္</font></b></h2>
          <h2 align="center">{{$f->title}}</h2>
          <p>{!!$f->short_description!!}.</p>
          <p class="btmspace-30">{!! $f->detail_description!!}</p>
          <p><a class="btn" href="#">Luctus purus nibh</a></p>
        </article>
      </div>
      <div class="one_half"><a href="#">
        <img src="{{ asset('upload/posts/'.$f->feature_photo) }}" alt="ပဓာနနာယကဆရာေတာ္" style="width:80%; height: 80%;"></a>
      </div>
      @endforeach
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->

@endsection