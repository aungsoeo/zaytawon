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
			<td>Email:</td>
			<td>{{ $user->email }}</td>
		</tr>
		<tr>
			<td>User Comment:</td>
			<td>{{ $user->comment }}</td>
		</tr>
	</table>

</body>
</html>
