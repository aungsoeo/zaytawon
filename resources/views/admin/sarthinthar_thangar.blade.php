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
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> စာသင္သားသံဃာမ်ား</h1>
			</div>	
		</div>


		<div class="row">
			<div class="form-group col-md-3">
				<form action="{{ route('admin.စာသင္သားသံဃာမ်ား.search') }}" method="POST" role="form">
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
						<td width="20px;">NO</td>
						<td>
							ေလွ်ာက္ထားသူ၏ ဘဲြ႔အမည္ 
						</td>
						<td>ေမြးသကၠရာဇ္</td>
						<td>သိကၡာ</td>
						<td>သာသနာ၀င္မွတ္တမ္းအမွတ္</td>
						<td>အဘအမည္</td>
						<td> ေနရပ္လိပ္စာ</td>
						<td>Action</td>
					</tr>					
				</thead>
				<tbody>
					<?php $i=1; ?>
					@foreach($students as $s)
						<tr>
							<td>{{$i++}}</td>
							<td>
								<a href="{{ route('admin.စာသင္သားသံဃာမ်ား.show',$s->id) }}">{{$s->degree}} </a>
							</td>
							<td>{{$s->birth_date}} </td>
							<td>{{$s->war_taw}}</td>
							<td>{{$s->thatharnar_no}}</td>
							<td>{{$s->f_name}} </td>
							<td>{{$s->f_address}}</td>
							<td>
								<input type="submit" class="btn btn-xs btn-danger" onclick="window.location.href='{{ route('admin.စာသင္သားသံဃာမ်ား.delete',$s->id)}}'" value="Delete">
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