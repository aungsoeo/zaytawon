@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')
<!-- ################################################################################################ -->
<div class="nextfooter">
   <div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

     <div id="content" class="three_quarter first"> 
      <div id="comments">
     <h2>Latest News &amp; Events</h2>
          <ul class="nospace listing">
            @foreach($posts as $post)
            <li class="clear">
              <div class="imgl borderedbox">
                <a href="{{ route('news.show',$post->id) }}">
                  <img src="{{ asset('upload/posts/' . $post->feature_photo) }}" alt="" style="width: 120px; height: 120px;">
                </a>
              </div>
              <p class="nospace btmspace-15"><a href="{{ route('news.show',$post->id) }}">{{$post->title}}</a><br>
               <small>Post on:&nbsp; {{$post->created_at->toFormattedDateString()}}</small>
               </p>
              <p>{{$post->short_description}}</p>
            </li>
            @endforeach
          </ul>    
      </div>
    </div>  
  <!-- ################################################################################################ -->  
    <div class="one_quarter sidebar"> 
    <h6>News Category</h6>
        <nav class="sdb_holder">
          <ul>
            <?php
            $page = (isset($_GET['page']))? $_GET['page'] : '';
            ?>
            @foreach($subcategory as $s)
              <li><a href="{{ route('news.index') }}?sub={{ $s->id }}">{{ $s->title }}</a></li>
            @endforeach
          </ul>
        </nav>
    </div>
      <div class="clear"></div>
    </main>
  </div>
</div> 
<?php
$subcategory_id = (isset($_GET['sub']))? $_GET['sub'] : '';
?>
{!! $posts->appends(['sub'=>$subcategory_id])->render() !!}
<br>
<!-- ################################################################################################ -->
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection