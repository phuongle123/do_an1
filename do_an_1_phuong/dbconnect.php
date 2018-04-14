<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$connect = mysqli_connect("localhost", "root", "", "do_an") or die("không thể kết nối được");
		mysqli_query($connect,'SET NAMES UTF8');
	?>
</body>
</html>