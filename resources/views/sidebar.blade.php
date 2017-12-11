<div class="sdb_holder">
  <a href="{{route('user.category', ['category' => 'education'])}}"><h6><i class="icon circle fa fa-bank"></i>&nbsp;စာသင္တုိက္ စာသင္သား မ်ားဆုိင္ရာ</h6></a>
  @foreach($education as $e)
  <a href="{{route('user.category', ['category' => 'education'])}}">{{$e->title}}</a>
  @endforeach
</div>
<hr>
<br>
<div class="sdb_holder">
  <article>
    <a href="{{route('user.category', ['category' => 'donor'])}}"><h3 class="font-x1"><h6><i class="icon circle fa fa-book"></i> &nbsp;ႏွစ္စဥ္ရာသက္ပန္ေန႔ဆြမ္း အလွဴရွင္မ်ား</h6></a>
      @foreach($donors as $d)
      <i class="fa fa-user"> &nbsp;
          <a href="{{ route('post.show',$d->id) }}">{{$d->title}}</a>
      </i>
      <br>
      @endforeach
  </article>
</div>
<hr>
<br>
<div class="sdb_holder">
  <article>
    <a href="{{route('user.category', ['category' => 'people'])}}"><h6><i class="fa fa-location-arrow"></i> &nbsp;တရားပဲြပင့္ေလွ်ာက္လုိ သူမ်ား</h6></a>
      @foreach($people as $p)
        <i class="fa fa-user"> &nbsp; {{$p->c_name }}</i><br>
        <i class="fa fa-calendar" aria-hidden="true">
                  <small>&nbsp; {{$p->date}}</small>
        </i>
      <br>
      <br>
      @endforeach
  </article>
  <hr>
</div>
