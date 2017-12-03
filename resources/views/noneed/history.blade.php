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
      <ul class="nospace listing">
        @foreach($posts as $post)
        <li class="clear">
          <div class="imgl borderedbox">
            <a href="{{ route('history.show',$post->id) }}">
              <img src="{{ asset('upload/posts/' . $post->feature_photo) }}" alt="" style="width: 120px; height: 120px;">
            </a>
          </div>
          <a href="{{ route('history.show',$post->id) }}">{{$post->title}}</a>
          <br>
          <time datetime="2045-04-06T08:15+00:00">{{$post->created_at->toFormattedDateString()}}</time><br><br>
          <p>{{$post->short_description}}</p>
        </li>
        @endforeach
      </ul> 
      {{$posts->render()}} 
      
    </div>  
  <!-- ################################################################################################ -->
    <div class="one_quarter sidebar"> 
    {!! MyFuncs::getNewsSideBar(); !!}
    </div>
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <!-- <main class="container clear">  -->
     <div class="clear"></div>
     <div class="founder">
      <h2 class="title">တည္ေထာင္အုပ္ခ်ဳပ္သူမ်ား (Founders)</h2>
      <div id="portfolio">
        <ul class="nospace clear">
          <?php $i=1; ?>
          @foreach($founders as $post)
          <li class="one_half {{ ($i%2!=0)? 'first' : '' }}">
            <article><img class="borderedbox" src="{{ asset('upload/posts/' . $post->feature_photo) }}" alt="">
              <a href="{{ route('history.show',$post->id) }}"><h2>{{$post->title}}</h2></a>
              <p>{{$post->short_description}}</p>
              <!-- <p class="right"><a href="#">Read More Here &raquo;</a></p> -->
            </article>            
          </li>
          <?php $i++; ?>
          @endforeach
        </ul>
        </div>
      </div> 
      <!-- ################################################################################################ -->
      <!-- <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav> -->
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