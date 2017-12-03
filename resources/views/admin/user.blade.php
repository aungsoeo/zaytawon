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
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> User List</h1>
			</div>	
		</div>


		<div class="row">
			<div class="form-group col-md-3">
				<form action="{{ route('admin.user.search') }}" method="POST" role="form">
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
			 <!-- for success message -->
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
             @endif
			<table class="table table-striped table-bordered table-hover"> 
				<thead>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Email</td>
						<td><input type="submit" class="btn btn-xs btn-default" onclick="window.location.href='{{ route('admin.user.create') }}'" value="Add New" ></td>
					</tr>					
				</thead>
				<tbody>
					@foreach($users as $u)			
					<tr>
						<td>{{$u->id}}</td>
						<td>							
								{{$u->name}}
						</td>
						<td>{{$u->email}}</td>
						<td>
							<input type="submit" class="btn btn-primary" onclick="window.location.href='{{ route('admin.user.edit',$u->id) }}'" value="Edit">
							<input type="submit" class="btn btn-danger" onclick="window.location.href='{{ route('admin.user.delete',$u->id)}}'" value="Delete">
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
	</div>
</div>
{{$users->render()}}
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
  $('.alert-success').fadeIn().delay(3000).fadeOut();
</script>
@endsection