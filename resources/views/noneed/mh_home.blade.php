@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
<!--<link href="{{ asset('layout/styles/layout1.css') }}" rel="stylesheet" type="text/css" media="all">-->
@endsection

@section('content')

<!-- ################################   slider   ###################################### -->
<div class="nextfooter">
  <div class="wrapper" id="image_slider">
    <div id="slider">
      <div id="slide-wrapper" class="rounded clear">
        <figure id="slide-1"><img src="images/demo/slider/1.jpeg" alt="" name="Banner"></figure>
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->

  <div class="wrapper row3">
    <div class="rounded">
      <main class="container clear"> 
        <!-- main body --> 
        <div class="group btmspace-30"> 
          <!-- Left Column -->
          <div class="one_quarter first"> 
            <ul class="nospace">
              <li class="btmspace-15"><em class="heading">တည္ေထာင္အုပ္ခ်ဳပ္သူမ်ား</em></li>
              @foreach($founders as $f)
              <li class="btmspace-15">
                <a href="{{ route('history.show',$f->id) }}"><p>{{ $f->title }} >></p><br><img class="borderedbox" src="{{ asset('upload/posts/'.$f->feature_photo) }}" alt=""></a>
              </li>
              @endforeach
              <!-- <li><a href="#"><em class="heading">Alumni</em> <img class="borderedbox" src="images/demo/220x95.gif" alt=""></a></li> -->
            </ul>
          </div>
          <!-- / Left Column --> 
          <!-- Middle Column -->
          <div class="one_half"> 
          <!-- <h2>Latest News &amp; Events</h2>
          <ul class="nospace listing">
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a></p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
            </li>
          </ul>
          <p class="right"><a href="#">Click here to view all of the latest news and events &raquo;</a></p> -->
          @foreach($about as $ab)
            <h2>{{ $ab->title }}</h2>
            @if($ab->feature_photo!="")
              <div class="imgholder"><img src="{{ asset('upload/posts/'.$ab->feature_photo) }}" alt="" /></div><br>
            @endif
            <p>
              {{ $ab->detail_description }}
            </p>
            <br>
          @endforeach
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->
        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
          <!-- <div class="sdb_holder">
            <h2 class="title">Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div> -->

      {!! MyFuncs::getNewsSideBar(); !!}
      
      <div class="sdb_holder">
        <h6>Latest News &amp; Events</h6>
        <ul class="nospace quickinfo">
          @foreach($news as $n)
          <li class="clear"><a href="{{ route('news.show', $n->id) }}"><img src="{{ asset('upload/posts/'.$n->feature_photo) }}" alt=""> {{ substr($n->title, 0, 15) }} </a></li>
          @endforeach
        </ul>
      </div>
      <!-- ################################################################################################ --> 
    </div>
    <!-- / Right Column --> 
  </div>
  
  <div class="clear"></div>
</main>
</div>
</div>
<?php
$sliderarr = array();
foreach($slider as $s){
  array_push($sliderarr, asset('upload/posts/'.$s->feature_photo));
}
?>
@endsection

@section('scripts')
@parent
<script>
  ImageArray = <?php echo json_encode($sliderarr); ?>;
  console.log(ImageArray);
</script>
<script src="{{ asset('layout/scripts/slider.js') }}"></script> 
@endsection