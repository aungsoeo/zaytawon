@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

<section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <img src="images/1.jpeg" name="Banner" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2>အလွဴရွင္မ်ား</h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
              @include('donor')
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8" style="margin-top: -100px;">
        <div class="left_content">
        <div class="single_post_content">
            <h2>သတင္းမ်ား</h2>
              @foreach($posts as $p)         
                  <div class="single_post_content">
                    <div class="single_post_content_left">
                      <ul class="business_catgnav  wow fadeInDown">
                        <li>
                          <figure class="bsbig_fig"> 
                            <a href="{{route('post.show',$p->id)}}" class="featured_img">
                              <img src="{{ asset('upload/posts/'.$p->feature_photo) }}" alt="" >
                            </a>
                          </figure>
                        </li>
                      </ul>
                    </div>
                    <div class="single_post_content_right">
                      <figure class="bsbig_fig">
                        <label>{{$p->Category->title}}>>{{$p->SubCategory->title}}</label>
                        <br>
                        <small>Post on:&nbsp; {{$p->created_at->toFormattedDateString()}}</small>
                        <figcaption> <a href="{{route('post.show',$p->id)}}">  {{$p->title}} </a> </figcaption>
                        <p>{{$p->short_description}}</p>                 
                      </figure>
                    </div>                      
                  </div>
              @endforeach

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4" style="float: right; margin-top: 50px;">
        <aside class="right_content">
             @include('process')  
          <div class="single_sidebar wow fadeInDown">              
             @include('purpose') 
         </div>
         <div class="single_sidebar wow fadeInDown">
             <br>
             <!-- Start: Copyright 2017 TraceMyIP.org Service Code (163303-11162017)- DO NOT MODIFY //-->
<div style="line-height:16px;text-align:left;"><script type="text/javascript" src="//s2.tracemyip.org/tracker/lgUrl.php?stlVar2=1500~1510849712~30*2~9B0C15*FFFFFF*FA0000*000000~1*1*0*0*0&amp;rgtype=4684NR-IPIB&amp;pidnVar2=81359&amp;prtVar2=2&amp;scvVar2=12"></script><noscript><a href="https://www.tracemyip.org/tools/website-visitors-counter-traffic-tracker-statistics/"><img src="//s2.tracemyip.org/tracker/1500~1510849712~30*2~9B0C15*FFFFFF*FA0000*000000~1*1*0*0*0/4684NR-IPIB/81359/2/12/ans/" alt="site ip tracker" style="border:0px;"></a></noscript></div>
<!-- End: TraceMyIP.org Service Code //-->
         </div>
        </aside>
      </div>
    </div>
</section>

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