<html>
<head>
	<meta charset="utf-8">
	<title>ระบบจัดการการให้บริการด้าน IT</title>
</head>
<body>
	

	<h1>แจ้งปัญหาหรือขอรับบริการ</h1>
	{!! Form::open(['url' => 'issue']) !!}
	

	@include('issue._formcreate')

    {!! Form::submit('Add New Issue') !!}
    {!! Form::close() !!}

</body>
</html>