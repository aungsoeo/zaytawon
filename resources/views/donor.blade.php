
<ul class="latest_postnav">
  @foreach($donors as $d)
  <li>
    
    <div class="media"> 
      <a href="{{route('post.show',$d->id)}}" class="media-left"> 
        <img src="{{ asset('upload/posts/'.$d->feature_photo) }}" alt="donor photo" >
      </a>
      <div class="media-body"> 
        <a href="{{route('post.show',$d->id)}}" class="catg_title">
          {{$d->title}}
        </a>
      <p>{{$d->short_description}}</p>
      </div>
    </div>
  </li>
  @endforeach
</ul>