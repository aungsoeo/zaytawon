@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

<section id="contentSection">
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">          
                  <div class="single_post_content">
            <h2>ျမန္မာႏုိင္ငံရွိတုိင္းေဒသၾကီးမ်ား</h2>
             <ul class="photograph_nav  wow fadeInDown">
               @foreach($posts as $n)
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla"> 
                      <a class="fancybox-buttons" data-fancybox-group="button" href="{{route('post.show',$n->id)}}" title="{{ $n->title }}">
                         <img src="{{ asset('upload/posts/'.$n->feature_photo) }}" alt="" >
                      </a> 
                    </figure>
                    <br>

                    <a href="{{route('post.show',$n->id)}}" class="catg_title" title="">
                     <h4> {{$n->title}}</h4>
                    </a>

                  </div>
                </li>
                @endforeach
             <!--  <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                  <h4>တနသၤာရီတုိင္း</h4>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a  href="#"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                  <h4>ဧရာ၀တီတုိင္း</h4>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                  <h4>ပဲခူးတုိင္း</h4>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                  <h4>ရန္ကုန္တုိင္း</h4>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img2.jpg" alt=""/> </a> </figure>
                  <h4>မႏၱေလးတုိင္း</h4>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                  <h4>စစ္ကုိင္းတုိင္း</h4>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a href="#"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                  <h4>မေကြးတုိင္း</h4>
                </div>
              </li> -->
            </ul>
          </div>
    </div>
  </div>

<div class="col-lg-4 col-md-4 col-sm-4">
  <aside class="right_content">
    <div class="latest_post">
      <h2>အလွဴရွင္မ်ား</h2>
      <div class="latest_post_container">
        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
        <ul class="latest_postnav">
           @foreach($donors as $d)
              <li>
                
                <div class="media"> 
                  <a href="{{route('post.show',$d->id)}}" class="media-left"> 
                    <img src="{{ asset('upload/posts/'.$d->feature_photo) }}" alt="donor photo" >
                  </a>
                  <div class="media-body"> 
                    <a href="{{route('post.show',$d->id)}}" class="catg_title">
                      {{$d->title}}
                    </a>
                  <p>{{$d->short_description}}</p>
                  </div>
                </div>
              </li>
              @endforeach
        </ul>
        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
      </div>
    </div>
  </aside>
</div>

  <div class="col-lg-4 col-md-4 col-sm-4" style="float: right;">
    <aside class="right_content">
      <div class="single_sidebar">
        <h2>လုပ္ငန္းစဥ္မ်ား</h2>
        <ul class="spost_nav">
          @foreach($process as $p)
          <li>                
            <div class="media"> 
              <a href="{{route('post.show',$p->id)}}" class="media-left"> 
                <img src="{{ asset('upload/posts/'.$p->feature_photo) }}" alt="donor photo" >
              </a>
              <div class="media-body"> 
                <a href="{{route('post.show',$p->id)}}" class="catg_title">
                  {{$p->title}}
                </a><br>
              <p>{{$p->short_description}}</p>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>   
      <div class="single_sidebar wow fadeInDown">             
              @include('purpose') 
     </div>
    </aside>
  </div>
</div>
</section>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection