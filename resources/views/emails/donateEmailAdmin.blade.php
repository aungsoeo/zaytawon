<!DOCTYPE html>
<html>
<head>
	<title>Email to Admin</title>
</head>
<body>
	<p>Informations received from Donator:<b><i>{{$donator_name}}</i></b></p>

	<table>
		<tr>
			<td>Donator Name</td>
			<td>{{$donator_name}}</td>
		</tr>
		<tr>
			<td>Donation Title</td>
			<td>{{$donation_title}}</td>			
		</tr>
		<tr>
			<td>Address</td>
			<td>{{$address}}</td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td>{{$phone}} </td>
		</tr>
		<tr>
			<td>Detail</td>
			<td>{{$detail}} </td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>{{$photo}} </td>
		</tr>
		<tr>
			<td>Date</td>
			<td>{{$date}}</td>
		</tr>
	</table>
	
</body>
</html>
