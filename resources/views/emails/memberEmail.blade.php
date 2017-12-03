<!DOCTYPE html>
<html>
<head>
	<title>Email to Admin</title>
</head>
<body>
	<p>Informations received from {{$user->name}}.</p>
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
			<td>NRC:</td>
			<td>{{ $user->nrc }}</td>
		</tr>
		<tr>
			<td>Contact Phone</td>
			<td> {{$user->phone_no}} </td>
		</tr>
		<tr>
			<td>Address:</td>
			<td>{{ $user->address }}</td>
		</tr>
		<tr>
			<td>Organization:</td>
			<td>{{ $user->organization }}</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>{{ $user->gender }}</td>
		</tr>
		<tr>
			<td>Monastery Name:</td>
			<td>{{ $user->monastery_name }}</td>
		</tr>		<tr>
			<td>Party:</td>
			<td>{{ $user->is_party }}</td>
		</tr>
		<tr>
			<td>Education:</td>
			<td>{{ $user->education }}</td>
		</tr>
		
	</table>

</body>
</html>
