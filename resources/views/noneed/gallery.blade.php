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
      <div id="gallery">
        <figure>
          <h2>Latest Images From The University</h2>
          <ul class="nospace clear">
            @foreach($posts as $post)
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="{{ asset('upload/posts/'.$post->feature_photo) }}" title="{{ $post->title }}"><img class="borderedbox" src="{{ asset('upload/posts/'.$post->feature_photo) }}" alt=""></a></li>
            @endforeach
            <!-- <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="images/demo/gallery/1.jpeg" title="Display Text 1"><img class="borderedbox" src="images/demo/gallery/1.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/2.png" title="Display Text 2"><img class="borderedbox" src="images/demo/gallery/2.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/3.png" title="Display Text 3"><img class="borderedbox" src="images/demo/gallery/3.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/4.png" title="Display Text 4"><img class="borderedbox" src="images/demo/gallery/4.jpeg" alt=""></a></li>
            
            <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="images/demo/gallery/1.jpeg" title="Display Text 1"><img class="borderedbox" src="images/demo/gallery/5.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/2.png" title="Display Text 2"><img class="borderedbox" src="images/demo/gallery/6.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/3.png" title="Display Text 3"><img class="borderedbox" src="images/demo/gallery/7.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/4.png" title="Display Text 4"><img class="borderedbox" src="images/demo/gallery/8.jpeg" alt=""></a></li>
            
            <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="images/demo/gallery/1.jpeg" title="Display Text 1"><img class="borderedbox" src="images/demo/gallery/9.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/2.png" title="Display Text 2"><img class="borderedbox" src="images/demo/gallery/10.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/3.png" title="Display Text 3"><img class="borderedbox" src="images/demo/gallery/11.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/4.png" title="Display Text 4"><img class="borderedbox" src="images/demo/gallery/12.jpeg" alt=""></a></li>

            <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="images/demo/gallery/1.jpeg" title="Display Text 1"><img class="borderedbox" src="images/demo/gallery/13.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/2.png" title="Display Text 2"><img class="borderedbox" src="images/demo/gallery/14.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/3.png" title="Display Text 3"><img class="borderedbox" src="images/demo/gallery/15.jpeg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/4.png" title="Display Text 4"><img class="borderedbox" src="images/demo/gallery/16.jpeg" alt=""></a></li> -->
            
          </ul>
       </figure>
      </div>
    </div>  
  <!-- ################################################################################################ -->  
    <div class="one_quarter sidebar"> 
    <h6>Gallery Group</h6>
        <nav class="sdb_holder">
          <ul>
          <?php
          $page = (isset($_GET['page']))? $_GET['page'] : '';
          ?>
          @foreach($subcategory as $s)
            <li><a href="{{ route('gallery.index') }}?sub={{ $s->id }}">{{ $s->title }}</a></li>
          @endforeach
          </ul>
        </nav>
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