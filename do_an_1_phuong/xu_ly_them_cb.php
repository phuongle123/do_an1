<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include("dbconnect.php");
	if(isset($_POST['insert']))
	{
		$sql = "insert into can_bo(ma_cb, ten_cb, gioi_tinh, que_quan)
				values ('".$_POST['macb']."', '".$_POST['tencb']."', '".$_POST['gioitinh']."', '".$_POST['quequan']."')";
		
		$sql_1 = "insert into phong values ('".$_POST['maphongthi']."','".$_POST['tenphongthi']."')";
		
		$sql_2 = "insert into lich_thi(ma_phong, ma_cb) values ('".$_POST['maphongthi']."','".$_POST['macb']."')";
		
		if(mysqli_query($connect, $sql) && mysqli_query($connect,$sql_1))
		{
			if(mysqli_query($connect,$sql_2))
			{
				echo("<script>alert('Thêm thành công');");
				echo("location.href='php/quan_tri_vien/quan_ly_can_bo.php';</script>");
			}
		}
		else
		{
			echo("<script>alert('Có lỗi, không thể thêm cán bộ');");
			echo("location.href='php/quan_tri_vien/quan_ly_can_bo.php';</script>");
		}
	}
	else
	{
		echo("<script>alert('không tồn tại biến');");
		echo("location.href='php/quan_tri_vien/quan_ly_can_bo.php';</script>");
	}
	?>
</body>
</html>