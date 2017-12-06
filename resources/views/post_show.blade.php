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
        <div id="comments">
          <div >
            <h2 >{!!$post->title!!}</h2>
          </div>
          <div>
             <p>{!!$post->short_description!!}</p>
          </div>
          <br>
          @if(file_exists( public_path() . '/upload/posts/' . $post->detail_photo)) 
             <div align="center">
                <img src="{{ asset('upload/posts/' . $post->detail_photo) }}" alt="{{$post->detail_photo}}" >
             </div>   
          @endif
             <p>{!!$post->detail_description!!}</p>
            <p>
              {!!$post->custom_field1? $post->custom_field1: ''!!}
            </p>
            <p>{!!$post->custom_field2? $post->custom_field2: ''!!}</p>
            <p>
              {!!$post->custom_field3? $post->custom_field3: ''!!}
            </p>
            <p>{!!$post->custom_field4? $post->custom_field4: ''!!}</p>
            <p>
              {!!$post->custom_field5? $post->custom_field: ''!!}
            </p>
        </div>

        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter"> 
        <!-- ################################################################################################ -->
        <div class="sdb_holder">
          <a href="education.php"><h6><i class="icon circle fa fa-bank"></i>&nbsp;စာသင္တုိက္ စာသင္သား မ်ားဆုိင္ရာ</h6></a>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        </div>
        <hr>
        <br>
        <div class="sdb_holder">
          <article>
            <a href="donars.php"><h6><i class="icon circle fa fa-book"></i> &nbsp;ႏွစ္စဥ္ရာသက္ပန္ေန႔ဆြမ္း အလွဴရွင္မ်ား</h6></a>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          </article>
        </div>
        <hr>
        <br>
        <div class="sdb_holder">
          <article>
            <a href="people.php"><h6><i class="fa fa-location-arrow"></i> &nbsp;တရားပဲြပင့္ေလွ်ာက္လုိ သူမ်ား</h6></a>
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
<!-- your custom script here -->
@endsection