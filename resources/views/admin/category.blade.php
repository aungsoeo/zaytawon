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
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Category List</h1>
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
				<input type="text" class="form-control" placeholder="Search">				
			</div>
			<div class="col-md-6">
								
			</div>
			<table class="table table-striped table-bordered table-hover"> 
				<thead>
					<tr>
						<td>NO</td>
						<td>Name</td>
						<td><input type="submit" class="btn btn-xs btn-default" onclick="window.location.href='{{ route('admin.category.create') }}'" value="Add New" ></td>
					</tr>					
				</thead>
				<tbody>
					<?php $i=1; ?>
					@foreach($cat as $c)
					<tr>
						<td>{{ $i++ }}</td>
						<td>
						{{ $c->title }}
						<br>
						{!! MyFuncs::getCategory($c->Categories, 1); !!}
						</td>
						<td>							
							<!-- <input type="submit" class="btn btn-primary" onclick="window.location.href='{{ route('admin.category.edit',$c->id) }}'" value="Edit"> -->
						<!-- 	<input type="submit" class="btn btn-danger" onclick="window.location.href='{{ route('admin.category.delete',$c->id)}}'" value="Delete"> -->
							<a href="{{ route('admin.category.delete',$c->id)}}" class="btn btn-link g_delete" onclick="return confirm('Are you sure to delete ?')">
								<button class="btn btn-danger">Delete</button>
							</a>
						</td>
					</tr>						
					@endforeach
				</tbody>
			</table>
		</div>
		
	</div>
</div>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script>
  $('.alert-success').fadeIn().delay(1000).fadeOut();
</script>
@endsection