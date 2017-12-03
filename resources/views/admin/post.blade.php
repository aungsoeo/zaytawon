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
<?php
$category_id = (isset($_GET['category_id']))? $_GET['category_id'] : '';
$sub_category_id = (isset($_GET['sub_category_id']))? $_GET['sub_category_id'] : '';
?>
<div id="content" class="bodylayout"><!-- second common-->
	<div class="well">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Post List</h1>
			</div>	
		</div>


		<div class="row">
			<form action="{{ route('admin.post.search') }}" method="GET" role="form">
				<div class="form-group col-md-3">
				    <div class="input-group">
				        <input type="text" class="form-control" name="search"
				            placeholder="Search" value="{{ (isset($_GET['search']))? $_GET['search'] : '' }}"> 
				        </span>
				    </div>
				</div>
				<div class="form-group col-md-3">
			    	<select id="ctr_parent_id" class="form-control" name="category_id">
                        <option value="">Select Category</option>
                        @foreach($cat as $key=>$value)
                            <option {{ ($category_id==$key) ? 'selected' : '' }} value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                	<select id="ctr_sub_id" class="form-control" name="sub_category_id">
                        <option value="">Select Sub Category</option>
                        @foreach($subcat as $sc)
                            <option {{ (isset($sub_category_id))? ($sub_category_id==$sc->id)? 'selected' : '' : '' }} value="{{ $sc->id }}">{{ $sc->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                	<input type="submit" value="Search" name="Search" class="btn btn-success"> 
                </div>
			</form>			
			
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
						<td><input type="submit" class="btn btn-xs btn-default" onclick="window.location.href='{{ route('admin.post.create') }}'" value="Add New" ></td>
					</tr>					
				</thead>
				<tbody>
					@foreach($posts as $post)			
					<tr>
						<td>{{$post->id}}</td>
						<td>
							<a href="{{ route('admin.post.show',$post->id) }}">{{$post->title}}</a>
						</td>
						<td>
							<input type="submit" class="btn btn-primary" onclick="window.location.href='{{ route('admin.post.edit',$post->id) }}'" value="Edit">
							<input type="submit" class="btn btn-danger" onclick="window.location.href='{{ route('admin.post.delete',$post->id)}}'" value="Delete">
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
	</div>

	@if(!isset($_GET['search']))
		{!! $posts->render() !!}
	@else
		{!! $posts->appends(['search' => $_GET['search'], 'category_id' => $category_id, 'sub_category_id' => $sub_category_id])->render() !!}
	@endif

	<input type="hidden" id="ctr_tocken" value="{{ csrf_token() }}" /> 
</div>
@endsection

@section('scripts')
@parent

<script type="text/javascript" src="{{ asset('js/getsubfrommain.js') }}"></script>

@endsection