@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')

<div id="content" class="bodylayout"><!-- second common-->
	<div class="well">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Category List</h1>
			</div>	
		</div>


		<div class="row">
			<div class="form-group col-md-3">
				<input type="text" class="form-control" placeholder="Search">				
			</div>
			<div class="col-md-6">
								
			</div>
			<table class="table table-striped table-bordered table-hover"> 
				<thead>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td><input type="submit" class="btn btn-xs btn-default" onclick="window.location.href='{{ route('admin.category.create') }}'" value="Add New" ></td>
					</tr>					
				</thead>
				<tbody>
					@foreach($cat as $c)
					<tr>
						<td>{{ $c->id }}</td>
						<td>
						{{ $c->title }}
						<br>
						{!! MyFuncs::getCategory($c->Categories, 1); !!}
						</td>
						<td>
							<!-- <input type="button" class="btn btn-xs btn-info" value="Edit"> <input type="button" class="btn btn-xs btn-danger" value="Delete"> --> 
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
@endsection