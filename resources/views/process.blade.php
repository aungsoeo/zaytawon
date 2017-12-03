<div class="single_sidebar">
  <h2>လုပ္ငန္းစဥ္မ်ား</h2>
  <ul class="spost_nav">
    @foreach($process as $p)
    <li>                
      <div class="media"> 
        <a href="{{route('post.show',$p->id)}}" class="media-left"> 
          <img src="{{ asset('upload/posts/'.$p->feature_photo) }}" alt="donor photo" >
        </a>
        <div class="media-body"> 
          <a href="{{route('post.show',$p->id)}}" class="catg_title">
            {{$p->title}}
          </a>
          <br>
        <p>{{$p->short_description}}</p>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
</div> 