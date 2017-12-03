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
             <form  class="contact_form" method="POST" action="{{ route('form.store') }}">
              {!! csrf_field() !!}
              @if ($errors->has('name'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
              <input class="form-control" type="text" name="name" placeholder="အမည္*">
              
               @if ($errors->has('father_name'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('father_name') }}</strong>
                  </span>
              @endif

              <input class="form-control" type="text" name="father_name" placeholder="အဖအမည္*">

             @if ($errors->has('nrc'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('nrc') }}</strong>
                  </span>
              @endif
              <input class="form-control" type="text" name="nrc" placeholder="ႏုိင္ငံသားမွတ္ပုံတင္အမွတ္*">
               
               @if ($errors->has('phone_no'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('phone_no') }}</strong>
                  </span>
              @endif
              <input class="form-control" type="text" name="phone_no" placeholder="ဖုန္းနံပါတ္*">
              
              @if ($errors->has('address'))
                  <span class="help-block" style="color: #b94a48">
                      <strong>{{ $errors->first('address') }}</strong>
                  </span>
              @endif
              <textarea class="form-control" cols="30" rows="5" placeholder="ေနရပ္လိပ္စာအျပည့္အစုံ*" name="address"></textarea>

              <input class="form-control" type="text" name="organization" placeholder="ပရဟိတလုပ္ေနေသာအဖြဲ႔အစည္း*">
              <input type="radio" name="gender" value="male"  style="margin:0 20px 30px 20px;">ေယာက်္ားေလး
              <input type="radio" name="gender" value="female" style="margin:0 20px 30px 20px;">မိန္းကေလး
              <input class="form-control" name="monastery_name" type="text" placeholder="ဘုန္းၾကီးေက်ာင္းအမည္*">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ပါတီအဖြဲ႔၀င္ျဖစ္ခဲ့ပါက<input type="Checkbox" name="is_party" style="margin:0 20px 30px 20px;" value="1">
              <input class="form-control" type="text" name="education" placeholder="ပညာအရည္အခ်င္း*">
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