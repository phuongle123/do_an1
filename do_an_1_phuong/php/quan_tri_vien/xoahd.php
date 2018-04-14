<?php
	$link = new mysqli ('localhost','root','','do_an') or die ('ket noi that bai');
	
	if(isset($_GET['id'])){
		$ma_cb=$_GET['id'];
		$query = "DELETE FROM can_bo WHERE macb='$ma_cb'";
		mysqli_query($link, $query) or die ('Xóa dữ liệu thất bại');
		header ('location:hoidongcoithi.php'); 
	}
?>