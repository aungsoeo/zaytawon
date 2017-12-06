@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
<style type="text/css">
  .td-category {
    list-style: none;
    font-family: 'Open Sans', 'Zawgyi-One', arial, sans-serif;
    font-size: 10px;
    margin-top: 0;
    margin-bottom: 10px;
    line-height: 1; 
  }
</style>
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
        <div id="comments">
          <h2 align="center">သတင္းႏွင့္ထုတ္ျပန္ေရးသားခ်က္မ်ား</h2>
          <ul>
            @foreach($posts as $new)
            <li>
              <article>
                <i class="fa fa-user"> &nbsp; Post By:{{$new->Category->title}}</i><br>
                <i class="fa fa-calendar" aria-hidden="true">
                  <small>&nbsp; Post on:&nbsp; {{$new->created_at->toFormattedDateString()}}</small>
                </i>
                <header>
                  <figure class="avatar">
                     <a href="{{ route('post.show',$new->id) }}">
                        <img src="{{ asset('upload/posts/'.$new->feature_photo) }}" alt="{{$new->title}}" style="width: 150px; height: 150px;">
                    </a>
                  </figure>
                    <a href="{{ route('post.show',$new->id) }}">{{$new->title}}</a>
   <!--                <time datetime="2045-04-06T08:15+00:00">
                    {{ date_format($new->created_at,'d F Y') }}
                  </time> -->
                </header>
                <div class="comcont">
                  <p>{!! $new->short_description !!}</p>
                  <a href="{{ route('post.show',$new->id) }}">Read more&raquo;</a>
                </div>
              </article>
            </li>
            @endforeach
          </ul>
          </div>
      {!! $posts->render()!!}
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter"> 
        <!-- ################################################################################################ -->
       @include('sidebar')
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