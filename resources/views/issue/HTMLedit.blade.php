<html>
<head>
	<meta charset="utf-8">
	<title>ระบบจัดการการให้บริการด้าน IT</title>
</head>
<body>
	<h1>แก้ไขข้อมูลการขอรับบริการ</h1>
	
	<label>Requester detail issue : </label>
	<textarea></textarea>
	<br><br

	<label>service_type_id : </label>
	<select name='service_type_id'>
        <option selected disabled hidden value=''>เลือกประเภท</option>   
    </select>
    <br><br>

    <label>service_domain_id : </label>
	<select name='service_domain_id'>
        <option selected disabled hidden value=''>เลือกประเภท</option>   
    </select>
    <br><br>

    <label>Service begin at : </label><input type="text" name="service_begin_at" size="50"><br><br>

    <label>Checkup detail : </label>
	<textarea></textarea>
	<br><br>

	<label>Service end estimated : </label><input type="text" name="service_end_estimated" size="50">
	<br><br>

	 <label>Service end at : </label><input type="text" name="service_end_at" size="50">
	 <br><br>

	<label>Issue status id : </label>
	<select name='issue_status_id'>
        <option selected disabled hidden value=''>เลือกประเภท</option> 
        <option value='1'>รอ</option>   
        <option value='2'>รับเรื่องแล้ว</option> 
        <option value='3'>กำลังดำเนินการ</option> 
        <option value='4'>ปิดงาน-เสร็จ</option> 
        <option value='5'>ปิดงาน-ส่งต่อศุนย์คอม</option> 
        <option value='6'>ปิดงาน-ไม่สามารถทำงานได้</option>   
    </select>
    <br><br>

    <label>Summary report : </label>
	<textarea></textarea>
	<br><br>

	<label>need_followup : </label>
	<input type="checkbox" name="check1" value="1"> YES
	<input type="checkbox" name="check2" value="2"> NO
	<br><br>

	<label>service_by : </label>
	<select name='service_by'>
        <option selected disabled hidden value=''>เลือกประเภท</option>   
    </select>
    <br><br>


	<input type="submit" value="Edit Issue"><br><br>

</body>
</html>