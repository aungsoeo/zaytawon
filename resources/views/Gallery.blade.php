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
         <div class="content"> 
        <!-- ################################################################################################ -->
        <div id="gallery">
          <figure>
             <h1 align="center"><b>ဓာတ္ပုံမွတ္တမ္းမ်ား</b></h1>
            <ul class="nospace clear">
              @foreach($photo as $p)
              <figcaption style="color: #C90;text-shadow: -1px 1px 0px #fff;">
                {!! $p->short_description !!}
              </figcaption>
              <br>
             <?php
                  $images = array();
                  $images[] = explode(",", $p['file']);
              ?>
              <?php
                for($i=0; $i<count($images[0]); $i++){
              ?>
                <li class="one_quarter">
                  <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset('image/'.$images[0][$i]) }}" title=" {!! $p->short_description !!}">
                    <img src="{{asset('image/'.$images[0][$i])}}" height="35" width="30">
                  </a>
                </li>
              <?php
                      }
              ?>
              <br><br><br><br>
              @endforeach
            </ul>


          </figure>
        </div>
        <!-- ################################################################################################ -->
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
        {{$photo->render()}}
        <!-- ################################################################################################ -->
      </div>
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