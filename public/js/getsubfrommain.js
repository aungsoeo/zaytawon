var url = "/baho/public/admin/";
$('#ctr_parent_id').change(function(){
	$.ajax({
		url : url+'post/getsub',
		dataType : 'html',
		method : 'post',
		data : {'parent_id' : $(this).val() , '_token' : $('#ctr_tocken').val() },
		success : function(data){
			$('#ctr_sub_id').html(data);
			if(data==""){
				$('#ctr_sub_id').html('<option value="">Select Sub Category</option>');
			}
		},
		error : function(error){
			console.log(error);
		}
	});
});