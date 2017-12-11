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
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Gallery</h1>
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
				<form action="" method="POST" role="form">
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
						<td width="50px;">NO</td>
						<td>Title </td>
						<td>Descripiton</td>
						<td>Photo</td>
						<td><input type="submit" class="btn btn-primary" onclick="window.location.href='{{ route('admin.gallery.create') }}'" value="Upload New" ></td>
					</tr>					
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
		
	</div>
</div>

@endsection

@section('scripts')
@parent
<script>
  $('.alert-success').fadeIn().delay(1000).fadeOut();
</script>
@endsection