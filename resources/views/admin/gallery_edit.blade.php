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
    <form method="post" id="multipleupload" action="{{ url('admin/gallery/update') }}" enctype="multipart/form-data">
    <table class="table table-striped table-bordered table-hover edit_table">
         <thead>
         <tr class="bg-info">
             <th>NO</th>
             <th>Title</th>
             <th>Descripiton</th>
             <th>Photos</th>
         </tr>
         </thead>
         <tbody>
         <?php
            $images = array();
            $images[] = explode(",", $data[0]['file']);
          ?>
             <tr>          
              <input type="hidden" name="_token"  id="ctr_token" value="<?php echo csrf_token() ?>">
              <input type="hidden"  class="original_photo" value="{{ $data[0]['file'] }}">
              <input type="hidden" name="id" value="{{ $data[0]['id'] }}" >
                 <td class="product_id">{{ $data[0]['id'] }}</td>
                 <td><input type="text" value="{{ $data[0]['title'] }}" name="title"></td>
                 <td>
                      <textarea class="form-control" name="short_description">{{ $data[0]['short_description'] }}</textarea>
                 </td>
                 <td>
                   <?php
                      for($i=0; $i<count($images[0]); $i++){
                    ?>
                    <div class="photo" style="display: inline;">
                   <img src="{{asset('image/'.$images[0][$i])}}" height="35" width="30" class="image" >
                   <a href="#" photosrc="{{asset('image/'.$images[0][$i])}}" class="imagestore">&times;</a>
                   </div>
                   <?php
                      }
                    ?>
                    <input type="file"  class="form-control" id="photo" name="files[]"  multiple>
                 </td>
                 <td>
                  <input type="submit" value="Update" class="btn btn-success update">
                 </td>
              <input type="hidden" name="remained_photo[]" class="remain_photo" >
             </tr>
         </tbody>
    </table>
    </form>
    </div>
  </div>
</div>

@endsection
@section('scripts')
@parent
<script type="text/javascript">
    items = [];
    p=$('.original_photo').val();
    images=p.split(",");    
    console.log(images);
    $('.photo').delegate('.imagestore', 'click', function() {    
     var value=$(this).attr('photosrc'); 
     var finalvalue=value.split("http://localhost/zaytawon/public/image/").join("");
     $(this).closest('.photo').find('.image').hide();
     $(this).closest('.photo').find('.imagestore').hide();   
        //items.push(finalvalue); 
        var index = images.indexOf(finalvalue);
        images.splice(index,1);
        $('.remain_photo').val(images);
    });
    var form = $('#multipleupload');    
      form.submit(function() {
       $r=$('.remain_photo').val();
       if($r==''){
       $p=$('.original_photo').val();
       $('.remain_photo').val($p);
     } 
        var form_data=new FormData(this);
        console.log('form_data');
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            cache:false,
            contentType: false,
            processData: false,
            data: form_data,
            success : function(data){
              alert('Success Update');
            },          
            
    });
     });
</script>
@endsection
