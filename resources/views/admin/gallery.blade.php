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
						<td width="150px;">Title </td>
						<td width="250px;">Descripiton</td>
						<td width="440px;">Photo</td>
						<td><input type="submit" class="btn btn-primary" onclick="window.location.href='{{ route('admin.gallery.create') }}'" value="Add New" ></td>
					</tr>					
				</thead>
				<tbody>

					<?php $j=1; ?>
					@foreach($gallery as $g)
					<tr>
						<?php
					        $images = array();
					        $images[] = explode(",", $g['file']);
				    	?>
						<td>{{$j++}}</td>
						<td>{{ $g->title }}</td>
						<td >{{ $g->short_description }}</td>
						<td>
							<?php
			                  for($i=0; $i<count($images[0]); $i++){
			                ?>
			               <img src="{{asset('image/'.$images[0][$i])}}" height="35" width="30">
			               <?php
			                  }
			                ?>
						</td>
						<td>
							<input type="submit" class="btn btn-primary" onclick="window.location.href='{{ route('admin.gallery.edit',$g->id) }}'" value="Edit">
							 <input type="submit" class="btn btn-danger" onclick="window.location.href='{{ route('admin.gallery.delete',$g->id)}}'" value="Delete">
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		{{$gallery->render()}}
	</div>
</div>

@endsection

@section('scripts')
@parent
<script>
  $('.alert-success').fadeIn().delay(1000).fadeOut();
</script>
@endsection