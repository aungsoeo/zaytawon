<!DOCTYPE html>
<html>
<head>
	<title>Email to Admin</title>
</head>
<body>
	<p>Informations received from visitor.</p>
	<table>
		<tr>
			<td>Name:</td>
			<td>{{ $user->name }}</td>
		</tr>
		<tr>
			<td>Father's Name</td>
			<td> {{$user->father_name}} </td>
		</tr>
		<tr>
			<td>Fahter's NRC:</td>
			<td>{{ $user->father_nrc }}</td>
		</tr>
		<tr>
			<td>Grade 8 passed Shcool:</td>
			<td>{{ $user->passed_school }}</td>
		</tr>
		<tr>
			<td>Roll NO:</td>
			<td>{{ $user->roll_no }}</td>
		</tr>
		<tr>
			<td>Contact Phone</td>
			<td> {{$user->phone_no}} </td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>{{ $user->gender }}</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td>{{ $user->address }}</td>
		</tr>
	</table>

</body>
</html>
