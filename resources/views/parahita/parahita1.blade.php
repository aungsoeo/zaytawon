@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
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
         @foreach($posts as $p)
          <h1 align="center"><b><font size="5px">{{$p->title}}</font></b></h1>
        <!-- <img class="imgr borderedbox inspace-5" src="images/demo/imgr.gif" alt=""> -->
            <center>
            @if ($p->feature_photo!="")
              <img class="borderedbox inspace-5" src="{{ asset('upload/posts/'.$p->feature_photo) }}" alt="">
            @endif
            </center>
            <p>{{$p->short_description}}</p>
            <p>{!!$p->detail_description!!}</p>
        @endforeach 
        <p></p>
        {{$posts->render()}}
      
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