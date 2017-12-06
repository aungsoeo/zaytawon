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
          <h2 align="center">သတင္းႏွင့္ထုတ္ျပန္ေရးသားခ်က္မ်ား</h2>
          <ul>
            @foreach($posts as $new)
            <li>
              <article>
                <header>
                  <figure class="avatar">
                     <a href="{{ route('post.show',$new->id) }}">
                        <img src="{{ asset('upload/posts/'.$new->feature_photo) }}" alt="{{$new->title}}" style="width: 150px; height: 150px;">
                    </a>
                  </figure>
                  <address>
                    <a href="{{ route('post.show',$new->id) }}">{{$new->title}}</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">
                    {{ date_format($new->created_at,'d F Y') }}
                  </time>
                </header>
                <div class="comcont">
                  <p>{!! $new->short_description !!}</p>
                  <a href="{{ route('post.show',$new->id) }}">Read more</a>
                </div>
              </article>
            </li>
            @endforeach
          </ul>
          </div>
      {!! $posts->render()!!}
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