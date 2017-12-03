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
            <h2>Contact Us</h2>
            <div class="contact_area">
            <!-- for success message -->
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
             @endif
             <form method="POST" action="{{ route('contact.store') }}" class="contact_form">
               {!! csrf_field() !!}
              @if ($errors->has('name'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
              <input class="form-control" name="name" type="text" placeholder="Name*">

               @if ($errors->has('email'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
              <input class="form-control" name="email" type="email" placeholder="Email*">
              <textarea name="comment" class="form-control" cols="30" rows="10" placeholder="Message*"></textarea>
              <input type="submit" value="Send Message">
            </form>
            </div>
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

  <div class="col-lg-4 col-md-4 col-sm-4">
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
  $('.alert-success').fadeIn().delay(5000).fadeOut();
</script>
@endsection