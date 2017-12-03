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
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Student List</h1>
			</div>	
		</div>


		<div class="row">
			<div class="form-group col-md-3">
				<form action="{{ route('admin.student.search') }}" method="POST" role="form">
				    {{ csrf_field() }}
				    <div class="input-group">
				        <input type="text" class="form-control" name="search"
				            placeholder="Search..." value="<?php if(isset($_POST['search'])){ echo $_POST['search']; } ?>"> 
				            <span class="input-group-btn">
				            <button type="submit" class="btn btn-default">
				                <span class="glyphicon glyphicon-search"></span>
				            </button>
				        </span>
				    </div>
				</form>			
			</div>
			<div class="col-md-6">		 <!-- for success message -->
	        @if ($message = Session::get('success'))
	          <div class="alert alert-success">
	              <p>{{ $message }}</p>
	          </div>
	         @endif			
								
			</div>
			<table class="table table-striped table-bordered table-hover"> 
				<thead>
					<tr>
						<td width="20px;">ID</td>
						<td>Name</td>
						<td>Gender</td>
						<td>Father Name</td>
						<td>Father's NRC</td>
						<td>Passed School</td>
						<td>Roll No</td>
						<td>Phone NO</td>
						<td>Email</td>
						<td>Address</td>
						<td>Action</td>
					</tr>					
				</thead>
				<tbody>
					@foreach($students as $s)
						<tr>
							<td>{{$s->id}}</td>
							<td>{{$s->name}} </td>
							<td>{{$s->gender}} </td>
							<td>{{$s->father_name}}</td>
							<td>{{$s->father_nrc}}</td>
							<td>{{$s->passed_school}} </td>
							<td>{{$s->roll_no}} </td>
							<td>{{$s->phone_no}}</td>
							<td>{{$s->email}} </td>
							<td>{{$s->address}}</td>
							<td>
								<input type="submit" class="btn btn-xs btn-danger" onclick="window.location.href='{{ route('admin.student.delete',$s->id)}}'" value="Delete">
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
	</div>
</div>
{{$students->render()}}
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script>
  $('.alert-success').fadeIn().delay(1000).fadeOut();
</script>
@endsection