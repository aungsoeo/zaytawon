<?php
$arr1 = []; 
$arr0 = [];
foreach($post as $p){
	$darr = explode("-", $p->start);
	if(sizeof($darr)==3){
		if(checkdate($darr[1],$darr[2],$darr[0])){
			$a = ['title'=>$p->title, 'start'=>$p->start];
			array_push($arr1, $a);
			array_push($arr0, $p->start);
		}
	}
}
$date = date('Ymd')."";
?>
<?php //echo json_encode($arr1); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='{{ asset("calender/fullcalendar.min.css") }}' rel='stylesheet' />
<link href='{{ asset("calender/fullcalendar.print.min.css") }}' rel='stylesheet' media='print' />
<script src="{{ asset('layout/scripts/jquery.min.js') }}"></script> 
<script src='{{ asset("calender/moment.min.js") }}'></script>
<script src='{{ asset("calender/fullcalendar.min.js") }}'></script>
<script>
	var donationdates = <?php echo json_encode($arr0); ?>;
	$(document).ready(function() {
		console.log(<?php echo json_encode($arr1); ?>);
		$('#calendar').fullCalendar({
			defaultDate: new Date(),
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: <?php echo json_encode($arr1); ?>
		});
		
		$('#calendar').delegate('.fc-day', 'mouseover', function(){
			if(donationdates.indexOf($(this).attr('data-date'))=="-1"){
				pointerdate = $(this).attr('data-date');
				curdate = <?php echo $date; ?>;
				console.log(curdate);
				arr=pointerdate.split('-');
				pointerdate = arr[0]+arr[1]+arr[2];
				console.log(" > "+pointerdate);
				if(pointerdate<=curdate){
					return false;
				}
				$(this).html('<center><a href="{{ route("donation.donate") }}" style="text-decoration:none"><h2 style="margin-top:40px; width:150px">Donate</h2></a></center>');
				$(this).css('background', '#fdf');
				$(this).css('cursor', 'pointer');
			}
		});

		// $('#calendar').delegate('.fc-day a', 'mouseover', function(){
		// 	//alert("a mouseover");
		// });

		$('#calendar').delegate('.fc-day', 'mouseout', function(){
			$(this).html('');
			$(this).css('background', '#ffffff');
		});

		$('#calendar').delegate('.fc-day', 'click', function(){
			href = $(this).find('a').attr('href');
			if(href==undefined){
				return false;
			}
			window.location.href=$(this).find('a').attr('href');
		});
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 95%;
		margin: 0 auto;
	}

</style>
</head>
<body>
	<center><h1> Donations Dates in Mahawthadar By Calender </h1></center>
	<br>
	<div id='calendar'></div>

</body>
</html>
