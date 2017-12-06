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
        <h1 align="center"><b><font size="5px">သာသနာျပဳလုပ္ငန္းစီမံကိန္းမ်ား</font></b></h1>    
        @foreach($posts as $t)
           @if ($t->feature_photo!="")
          <img class="imgr borderedbox inspace-5" src="{{ asset('upload/posts/'.$t->feature_photo) }}" alt="သာသနာျပဳလုပ္ငန္းစီမံကိန္းမ်ား" style="width: 137px; height: 137px;">
          @endif
          <p>{!!$t->title!!}</p>
          <p>{!!$t->short_description!!}</p>
          <p>{!!$t->detail_description!!}</p>
          <hr><br>
        @endforeach

        <h1>ပရဟိတလုပ္ငန္းစဥ္မ်ား</h1>
        @foreach($parahita_process as $p)
         @if ($p->feature_photo!="")
          <img class="imgl borderedbox inspace-5" src="{{asset('upload/posts/'.$p->feature_photo) }}" alt="ပရဟိတလုပ္ငန္းစဥ္မ်ား" style="width: 137px; height: 137px;">
          @endif
        <p>{!!$p->title!!}</p>
        <p>{!!$p->short_description!!}</p>
        <p>{!!$p->detail_description!!}</p>
        <hr><br>
        @endforeach
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