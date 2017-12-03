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
            <h2>ကဗ်ာ/ေဆာင္းပါမ်ား</h2>
             <ul class="photograph_nav  wow fadeInDown">
                <div class="file_not_exist">
                  @if($errors->any())
                  <h4 style="text-align: center; color: red;">{{$errors->first()}}</h4>
                  @endif
                </div>
                @foreach($posts as $poem)
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla"> 
                        @if($poem->attach_file!='')
                        <a href="{{route('viewfile',$poem->attach_file)}}" target="_blank"> <img src="{{ asset('upload/posts/'.$poem->feature_photo) }}" alt="" ></a> 
                        @else
                        <a href="#" > <img src="{{ asset('upload/posts/'.$poem->feature_photo) }}" alt="" ></a> 
                        @endif
                    </figure>
                    <h4>{{$poem->title}}</h4>
                    <h2>
                      <a href="{{route('downloadfile',$poem->id)}}">
                        <i class="glyphicon glyphicon-download">
                          Download
                        </i>
                    </a>
                    </h2>
                  </div>
                </li>
                @endforeach
            </ul>
          </div>
    </div>
  </div>

<div class="col-lg-4 col-md-4 col-sm-4" >
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

  <div class="col-lg-4 col-md-4 col-sm-4" style="float: right; margin-top: 50px;">
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
          <h2>ရည္ရြယ္ခ်က္</h2>
          <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  
     </div>
    </aside>
  </div>
</div>
</section>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script>
  $('.file_not_exist').fadeIn().delay(3000).fadeOut();
</script>
@endsection