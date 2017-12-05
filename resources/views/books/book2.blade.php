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
            <header class="heading">ေဒါက္တာေသာပါက၏ ေနာက္ဆုံးေရးေဆာင္ပါးမ်ား</header>
            <ul class="nospace clear">
              @foreach($book2 as $b)
                <li class="one_quarter " >
                  <a href="#">
                      @if ($b->feature_photo!="")
                        <img src="{{ asset('upload/posts/'.$b->feature_photo) }}" alt="" style="width: 155px; height: 155px;">
                      @else
                        <img src="{{asset('images/demo/gallery/01.png')}}" alt="" style="width: 155px; height: 155px;">
                      @endif
                      <center>To Download</center>
                  </a>
                </li> 
              @endforeach 
            </ul>
            <figcaption>Gallery Description Goes Here</figcaption>
          </figure>
        </div>
        {{$book2->render()}}
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
<!--         <nav class="pagination">
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
      </div>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter"> 
        <!-- ################################################################################################ -->
        <div class="sdb_holder">
          <h6><i class="icon circle fa fa-bank"></i>&nbsp;စာသင္တုိက္ စာသင္သား မ်ားဆုိင္ရာ</h6>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        </div>
        <hr>
        <br>
        <div class="sdb_holder">
          <article>
            <h6><i class="icon circle fa fa-book"></i> &nbsp;ႏွစ္စဥ္ရာသက္ပန္ေန႔ဆြမ္း အလွဴရွင္မ်ား</h6>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          </article>
        </div>
        <hr>
        <br>
        <div class="sdb_holder">
          <article>
            <h6><i class="fa fa-location-arrow"></i> &nbsp;တရားပဲြပင့္ေလွ်ာက္လုိ သူမ်ား</h6>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          </article>
        </div>
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

@endsection