@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
<style type="text/css">
  #progress-wrp {
      border: 1px solid #0099CC ;
      padding: 1px;
      position: relative;
      border-radius: 3px;
      margin: 10px;
      text-align: left;
      background: #fff;
      box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
      height: 20px;
      width: 98%;
    }
    #progress-wrp .progress-bar{
        height: 20px;
        border-radius: 3px;
        background-color: #f39ac7 ;
        width: 0;
        box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.11);
    }
    #progress-wrp .status{
        top:3px;
        left:50%;
        position:absolute;
        display:inline-block;
        color: #000000 ;
    }
</style>
@endsection

@section('content')

<div id="content" class="bodylayout"><!-- second common-->
	<div class="well">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Gallery Create</h1>
			</div>	
		</div>
        <!-- for success message -->
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
             @endif         
		<div class="row">
			<form class="form-horizontal"  id="multipleupload" enctype="multipart/form-data" role="form" action="{{ url('admin/gallery/store') }}" >
              <input type="hidden" name="_token" id="ctr_token" value="<?php echo csrf_token() ?>">
				<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Post Title</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('main_category_id') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Main Category</label>

                    <div class="col-md-9">
                        <select id="ctr_parent_id" class="form-control" name="main_category_id">
                            <option value="old('main_category_id') }}"></option>
                            @foreach($cat as $c)
                                <option value="{{ $c->id }}">{{ $c->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('main_category_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('main_category_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('sub_category_id') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Sub Category</label>

                    <div class="col-md-9">
                        <select id="ctr_sub_id" class="form-control" name="sub_category_id">
                            <option value="{{old('sub_category_id')}}"></option>
                         
                           <!--  @foreach($subcat as $sc)
                                <option value="{{ $sc->id }}">{{ $sc->title }}</option>
                            @endforeach -->
                            
                        </select>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('feature_photo') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Upload File</label>

                    <div class="col-md-9">
                        <input type="file" value="{{old('files[]')}}" class="form-control" id="photo" name="files[]"  multiple>
                        @if ($errors->has('files[]'))
                            <span class="help-block">
                                <strong>{{ $errors->first('files[]') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label"> </label>
                    <div class="col-md-9">
                        <!-- <div class="progress-bar" style="width:0px;height: 10px;background: green;display: block; transition: width .5s;"></div> -->
                        <div id="progress-wrp">
                          <div class="progress-bar"></div >
                          <div class="status">0%</div>
                        </div>

                    </div>
                    
                </div>


                <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }}">
                    <label class="col-md-2 control-label">Gallery Description</label>

                    <div class="col-md-9">
                        <textarea class="form-control" name="short_description">{{ old('short_description') }}</textarea>

                        @if ($errors->has('short_description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('short_description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-6">
                        <br>
                        <button type="submit" class="btn btn-primary">
                            Upload
                        </button>
                    </div>
                </div>
            </form>
		</div>
		
	</div>
    <input type="hidden" id="ctr_tocken" value="{{ csrf_token() }}" /> 
</div>

@endsection

@section('scripts')
@parent
<!-- your custom script here -->
<script>
  $('.alert-success').fadeIn().delay(1000).fadeOut();
</script>
<script type="text/javascript" src="{{ asset('js/getsubfrommain.js') }}"></script>
<script type="text/javascript">

    $('#multipleupload').submit(function(e){
        e.preventDefault();
        var form_data=new FormData(this);
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        })
        $.ajax({
            xhr: function(){
              var xhr = $.ajaxSettings.xhr();
              if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(event) {
                      var percent = 0;
                      var position = event.loaded || event.position;
                      var total = event.total;
                      if (event.lengthComputable) {
                          percent = Math.ceil(position / total * 100);
                      }
                      //update progressbar
                      $(" .progress-bar").css("width", + percent +"%");
                      $(" .status").text(percent +"%");
                  }, true);
              }
              return xhr;
          },
            type: 'POST',
            url: $(this).attr('action'),
            cache:false,
            contentType: false,
            processData: false,
            data: form_data,
            success : function(data){
                alert('Gallery is successfully Uploaded!');
               document.getElementById('multipleupload').reset();
               window.location.replace("http://localhost/zaytawon/public/admin/gallery");
            }      
        });
    });
</script>
@endsection