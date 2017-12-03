<h2>ရည္ရြယ္ခ်က္</h2>
@foreach($purpose as $pur)               
<div class="media"> 
  <div class="media-body">    
  	<p>{{$pur->short_description}}</p>
  	<a href="{{route('post.show',$pur->id)}}" class="catg_title">Read More&raquo;</a>
  </div>
</div>
@endforeach