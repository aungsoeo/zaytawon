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
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Member List</h1>
			</div>	
		</div>


		<div class="row">
			<div class="form-group col-md-3">
				<form action="{{ route('admin.member.search') }}" method="POST" role="form">
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
						<td>Father's Name</td>
						<td>NRC</td>
						<td>Phone No</td>
						<td>Address</td>
						<td>Organization</td>
						<td>Gender</td>
						<td>Monastery Name</td>
						<td>Party</td>
						<td>Education</td>
						<td></td>
					</tr>					
				</thead>
				<tbody>
					<?php $i=1 ?>	
					@foreach($members as $m)
	
					<tr>
						<td><?php print $i++ ?></td>
						<td>							
							{{$m->name}}
						</td>
						<td>{{$m->father_name}}</td>
						<td>{{$m->nrc}}</td>
						<td>{{$m->phone_no}}</td>
						<td>{{$m->address}}</td>
						<td>{{$m->organization}}</td>
						<td>{{$m->gender}}</td>
						<td>{{$m->monastery_name}}</td>
						<td>{{$m->is_party}}</td>
						<td>{{$m->education}}</td>
						<td>
							<input type="submit" class="btn btn-primary" onclick="window.location.href='{{ route('admin.user.edit',$m->id) }}'" value="Edit">
							<input type="submit" class="btn btn-danger" onclick="window.location.href='{{ route('admin.user.delete',$m->id)}}'" value="Delete">
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
	</div>
</div>
{{$members->render()}}
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
  $('.alert-success').fadeIn().delay(3000).fadeOut();
</script>
@endsection