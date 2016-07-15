<html>
<head>
	<meta charset="utf-8">
	<title>ระบบจัดการการให้บริการด้าน IT</title>
</head>
<body>
	<!-- <h1>แจ้งปัญหาหรือขอรับบริการ</h1>
	
	<label>Requester detail issue : </label>

		<textarea></textarea>
		<input type="submit" value="Add New Issue"><br><br> -->

	<h1>แจ้งปัญหาหรือขอรับบริการ</h1>
	{!! Form::open(['url' => 'issue']) !!}
	<!-- <label>ID : </label><input type="text" name="id"><br><br> -->
	<!-- <label>Requester ID : </label><input type="number" name="requester" size="50"><br><br> -->
	<!-- <label>DOB : </label><input type="text" name="dob"><br><br>
	<label>Age : </label><input type="number" name="age"><br><br> -->

	@include('issue._form')

    {!! Form::submit('Add New Issue') !!}
    {!! Form::close() !!}

</body>
</html>