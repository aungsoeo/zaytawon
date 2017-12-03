@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
  <link href="{{ asset('css/bootstrap_datepicker.css') }}" rel="stylesheet" type="text/css" media="all">
<style media="screen">
.label{
  width: 200px;
  float: left;
}
.input-data{
  width: 400px;
  float: leff
}
  #name{
    float: left;
  }
.alert-danger{
  display: block;
  margin-left: 200px;
  background: #eee;
}
.alert-success{
  display: block;
  background: #efefef;
  color: green;
}
</style>
@endsection

@section('content')


<div class="nextfooter">
   <div class="wrapper row3">
     <div class="rounded">
    <main class="container clear">

     <div id="content" class="three_quarter first">
     <div id="comments" class="donate-form">
          <h2>Donate Form</h2>

          @if ( count( $errors ) > 0 )
            <div class=" alert-danger">
                @foreach ($errors->all() as $error)
                    *{{ $error }}*<br>        
                @endforeach
            </div>
          
          @endif
          <!-- for success message -->
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif

          <form action="{{ route('donation.donate') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div  class="form-group">
              <div class="label" id="name">
                  <label for="name">Donator Name <span>*</span></label>
              </div>
              <div class="input-data" id="name">
                <input type="text"  name="donator_name" id="name" placeholder="Donator Name" >
              </div>
            </div>

            <div  class="form-group">
              <div class="label" id="name">
                <label for="donation_title">Donation Title <span>*</span></label>
              </div>
              <div class="input-data" id="name">
                <input type="text" name="donation_title" id="name" placeholder="Donation Title" >
              </div>
            </div>

            <div  class="form-group">
              <div class="label" id="name">
                <label for="">Address</label>
              </div>
              <div class="input-data" id="name">
                <textarea name="address" placeholder="Address"></textarea>
              </div>
            </div>

            <div  class="form-group">
              <div class="label" id="name">
                <label for="">Phone</label>
              </div>
              <div class="input-data" id="name">
                <input type="text" name="phone_no" placeholder="Phone Number">
              </div>
            </div>

            <div  class="form-group">
              <div class="label" id="name">
                <label for="email">Email <span>*</span></label>
              </div>
              <div class="input-data" id="name">
                <input type="email" name="email" id="email" placeholder="Email" >
              </div>
            </div>

            <div class="form-group">
              <div class="label" id="name">
                <label for="detail">Detail <span>*</span></label>
              </div>
              <div class="input-data" id="name">
                <textarea name="detail" id="detail" placeholder="Detail"></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="label" id="name">
                <label for="photo">Photo</label>
              </div>
              <div class="input-data" id="name">
                <input type="file" name="photo"  id="photo" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="label" id="name">
                <label for="">Donation Date <span>*</span></label>
              </div>
              <div class="input-data" id="name">
                <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="text">
              </div>
            </div>


            <div lass="form-group">
              <div class="label" id="name">

              </div>
              <div class="input-data" id="name">
                <input  type="submit" value="Submit" >
                &nbsp;&nbsp;
                <input name="reset" type="reset" value="Reset Form">
              </div>

            </div>
          </form>
      </div>
    </div>
  <!-- ################################################################################################ -->
    <div class="one_quarter sidebar">
    {!! MyFuncs::getNewsSideBar(); !!}
    </div>
      <div class="clear"></div>
    </main>
  </div>
</div>


@endsection

@section('scripts')
@parent
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>


<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.donate-form form').length>0 ? $('.donate-form form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})

  $('.alert-success').fadeIn().delay(5000).fadeOut();
</script>
@endsection
