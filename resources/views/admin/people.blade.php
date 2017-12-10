@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
<style type="text/css">
.alert-success{
  display: block;
  background: #efefef;
  color: green;
}
</style>
@endsection

@section('content')

<div id="content" class="bodylayout"><!-- second common-->
	<div class="well">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> တရားပဲြပင့္ေလွ်ာက္လုိသူမ်ား</h1>
			</div>	
		</div>
		 <!-- for success message -->
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
         @endif
		<div class="row">
			<div class="form-group col-md-3">
				<form action="{{ route('admin.people.search') }}" method="POST" role="form">
				    {{ csrf_field() }}
				    <div class="input-group">
				        <input type="text" class="form-control" name="search"
				            placeholder="Search.." value="<?php if(isset($_POST['search'])){ echo $_POST['search']; } ?>"> 
				            <span class="input-group-btn">
				            <button type="submit" class="btn btn-default">
				                <span class="glyphicon glyphicon-search"></span>
				            </button>
				        </span>
				    </div>
				</form>			
			</div>
			<div class="col-md-6">
								
			</div>
			<table class="table table-striped table-bordered table-hover"> 
				<thead>
					<tr>
						<td width="50px;">No</td>
						<td>တရားပဲြက်င္းပရျခင္း ေခါင္းစဥ္</td>
						<td>က်င္းပမည့္ေနရာ</td>
						<td>က်င္းပမည့္ရက္</td>
						<td>တာ၀န္ခံ၏အမည္</td>
						<td>ေနရပ္လိပ္စာအျပည့္အစုံ</td>
						<td>ဖုန္းနံပါတ္ </td>
						<td>ၾကိဳဆုိပင့္ေဆာင္မည့္အေနအထား</td>
						<td>Action</td>
					</tr>					
				</thead>
				<tbody>
					<?php $i=1; ?>
					@foreach($people as $p)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$p->title}} </td>
							<td>{{$p->place}} </td>
							<td>{{$p->date}} </td>
							<td>{{$p->c_name}}</td>
							<td>{{$p->c_address}}</td>
							<td>{{$p->phone}}</td>
							<td>{{$p->position}}</td>
							<td>
								<input type="submit" class="btn btn-danger" onclick="window.location.href='{{ route('admin.people.delete',$p->id)}}'" value="Delete">
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
	</div>
</div>
{{$people->render()}}
@endsection

@section('scripts')
@parent
<script>
  $('.alert-success').fadeIn().delay(1000).fadeOut();
</script>
@endsection