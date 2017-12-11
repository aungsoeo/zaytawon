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
              @foreach($posts as $b)
                <li class="one_quarter " >
                      @if ($b->feature_photo!="" && $b->attach_file!="")
                       <a href="{{route('viewfile',$b->attach_file)}}" target="_blank"> 
                        <img src="{{ asset('upload/posts/'.$b->feature_photo) }}" alt="{{$b->title}}" style="width: 155px; height: 155px;">
                      </a>
                      @else
                        <img src="{{asset('images/demo/gallery/01.png')}}" alt="no_upload_photo" style="width: 155px; height: 155px;">
                      @endif
                      <a href="{{route('downloadfile',$b->id)}}">
                         <center><i class="fa fa-download" aria-hidden="true">&nbsp;Download</i></center> 
                      </a>
                </li> 
              @endforeach 
            </ul>
          </figure>
        </div>
        {{$posts->render()}}
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

@endsection