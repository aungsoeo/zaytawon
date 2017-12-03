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
        <div >
          <h2 >{{$post->title}}</h2>
        </div>
        <div>
           <p>{{$post->short_description}}</p>
        </div>
        <br>
        @if(file_exists( public_path() . '/upload/posts/' . $post->detail_photo)) 
           <div>
              <img src="{{ asset('upload/posts/' . $post->detail_photo) }}" alt="" >
           </div>   
        @else 
            no photo 
        @endif
        <br>
        <div >
           <p>{{$post->detail_description}}</p>
        </div>
        <br> 
        <div>
          <p>
            {{$post->custom_field1? $post->custom_field1: ''}}
          </p>
        </div> 
        <br>
        <div>
          <p>{{$post->custom_field2? $post->custom_field2: ''}}</p>
        </div>
        <br>
        <div>
          <p>
            {{$post->custom_field3? $post->custom_field3: ''}}
          </p>
        </div> 
        <br>
        <div>
          <p>{{$post->custom_field4? $post->custom_field4: ''}}</p>
        </div>
        <br>
        <div>
          <p>
            {{$post->custom_field5? $post->custom_field: ''}}
          </p>
        </div> 

    </div>  
  <!-- ################################################################################################ -->  
    <div class="one_quarter sidebar"> 
    {!! MyFuncs::getNewsSideBar(); !!}
    </div>
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