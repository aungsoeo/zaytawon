$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("fast");
		return false;
    });
	$('#cancel').click(function(){
		$("#panel").slideUp("fast");
		return false;	
	});
	
	$('#tbl').delegate('a.fa-edit','click',function(e){
		var $tr = $(this).closest('tr');
		$tr.find('.hasinput').show();
		$tr.find('.editable').hide();
		
		var user_id=$tr.attr('tr-id');
		$('#brand_ids'+user_id).select2();
		
		$tr.find('.fa-save').show();
		$tr.find('.fa-edit').hide();
		
		$tr.find('.fa-undo').show();
		$tr.find('.fa-times-circle').hide();
	});
	
	$('#tbl').delegate('a.fa-undo','click',function(e){
		var $tr = $(this).closest('tr');
		$tr.find('.hasinput').hide();
		$tr.find('.editable').show();
		
		$tr.find('.fa-save').hide();
		$tr.find('.fa-edit').show();
		
		$tr.find('.fa-undo').hide();
		$tr.find('.fa-times-circle').show();
	});
});