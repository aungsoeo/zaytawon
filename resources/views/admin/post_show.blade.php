@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

    <div id="content" class="bodylayout"><!-- second common-->
        <div class="col-sm-8 blog-main">
        <h1>
            {{$post->title}}
        </h1>
        <hr>
  
        {{$post->short_description}}
        <div class="clear"></div>
        <br>
        <div class="imgl borderedbox">
            <img src="{{ asset('upload/posts/' . $post->feature_photo) }}" alt="" style="width: 220px; height: 220px;">
        </div>
        <div class="clear"></div>    
        <br>
        <br>
        <p>
            {{$post->detail_description}}
        </p>
        <div class="imgl borderedbox">
            <img src="{{ asset('upload/posts/' . $post->detail_photo) }}" alt="" style="width: 220px; height: 220px;">
        </div>

        <br>
        <br>
        <div class="clear"></div>


    </div>
</div>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection