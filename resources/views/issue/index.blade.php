<html>
<head>
	<title>ระบบจัดการการให้บริการด้าน IT</title>
</head>
<body>

	<h1>Issues index.</h1>
	<a href="/issue/create">Add New Issue.</a>

	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>requester</th>
				<th>service_type_id</th>
				
			</tr>
		</thead>
		<tbody>
			 @foreach ($issues as $issue)
				
						<td>{{$issue->id}}</td>
						<td>{{$issue->requester}}</td>
						<td>{{$issue->service_type_id}}</td>
						<td><a href="/issue/{{$issue->id}}/edit">Edit</a></td>
						
				</tr>
			@endforeach 
		</tbody>
	</table>	


	
</body>
</html>