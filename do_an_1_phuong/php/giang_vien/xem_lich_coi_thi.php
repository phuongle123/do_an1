<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Hocvien.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Xem kết quả</title>
<!-- InstanceEndEditable -->
<link href="/do_an_1_phuong/css/hocvien/header.css" rel="stylesheet" type="text/css" />
<link href="/do_an_1_phuong/css/hocvien/navigation_bar.css" rel="stylesheet" type="text/css" />
<link href="/do_an_1_phuong/css/hocvien/content_left.css" rel="stylesheet" type="text/css" />
<link href="/do_an_1_phuong/css/hocvien/content_right.css" rel="stylesheet" type="text/css" />
<link href="/do_an_1_phuong/css/hocvien/content_central.css" rel="stylesheet" type="text/css" />
<link href="/do_an_1_phuong/css/hocvien/footer.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="Main">
        <!--Header-->
        <div class="header">
        	<img src="/do_an_1_phuong/images/hocvien/header.png" alt="header" />
        </div>
        <!--Điều hướng-->
        <div class="navigation_bar">
        	<div class="Home">
                <a href="#"><img src="/do_an_1_phuong/images/Hocvien/webdev_0006s_0000_home.png" alt="Home"/></a>
           	</div>
            <ul class="Menu">
                <li>
					<a href="#">Thông báo</a>
				</li>
                <li>
					<a href="#">Giới thiệu</a>
				</li>
                <li>
					<a href="#">Biểu mẫu</a>
				</li>	
                <li>
					<a href="#">Chế độ - chính sách</a>
				</li>
                <li>
					<a href="#">Nội quy</a>
				</li>
                <li>
					<a href="#">Liên hệ</a>
				</li>
          	</ul>
        </div>
        <!--Content-->
        <div class="content">
        	<!--Chức năng trực tuyến-->
        	<div class="content_left">
            	<h3>Chức năng trực tuyến</h3>
           	  	<h4>Tra cứu:</h4>
              	<input type="text" name="tracuu" id="tracuu"/>
                <a href="#">Đăng ký giảng dạy</a>
				<a href="/do_an_1_phuong/yeucau.php">Gửi yêu cầu</a>
				
            </div>
            <div class="content_right">
           		<!--Tài khoản-->
                <div class="Taikhoan">
                    <h3>Tài khoản</h3>
                    <a href="#">Đổi mật khẩu</a>
                    <a href="#">Đăng xuất</a>
                </div>
                <div class="Chucnang">
                    <h3>Chức năng</h3>
					<a href="#">Thông tin giảng viên</a>
                    <a href="#">Xem lịch dạy</a>
                    <a href="#">Xem lịch coi thi</a>
                </div>
           	</div>
            <!-- InstanceBeginEditable name="content_central" -->
			<?php
			include("../../dbconnect.php");
			?>
			<form action="" method="post">
             <div class="content_central">
            <h1>Lịch thi</h1>
				<div id="infor3">
				  <ul>
				    <li>Mã cán bộ:     
				      <input name="ma_cb" id="giangvien" type="text"/>
			        </li>
				  </ul>
			  </div>
			  <div id="button2">
				  <input type="submit" name="submit" value="Xem lịch thi" />
			  </div>
           
            <div id="table">
    		<table border="1" cellspacing="0" width="90%">
    			<tr>
            	<th>Mã cán bộ</th>
            	<th>Tên cán bộ </th>
           	    <th>Ngày thi</th>
                <th>Giờ thi</th>
                <th>Phòng thi</th>
                </tr>
				<tr>
					<td>
						<?php
						if(isset($_POST['submit']))
						{
							echo($_POST['ma_cb']);
						}
						?>
					</td>
					<td>
						<?php
						if(isset($_POST['submit']))
						{
							$sql = "select ten_cb from can_bo where ma_cb='".$_POST['ma_cb']."'";
							$query = mysqli_query($connect, $sql);
							if($row = mysqli_fetch_assoc($query))
							{
								echo($row['ten_cb']);
							}
						}
						?>
					</td>
					<td>
						<?php
						if(isset($_POST['submit']))
						{
							$sql = "select ngay_thi from lich_thi where ma_cb='".$_POST['ma_cb']."'";
							$query = mysqli_query($connect, $sql);
							if($row = mysqli_fetch_assoc($query))
							{
								echo($row['ngay_thi']);
							}
						}
						?>
					</td>
					<td>
						<?php
						if(isset($_POST['submit']))
						{
							$sql = "select ma_lich_thi from lich_thi where ma_cb='".$_POST['ma_cb']."'";
							$query = mysqli_query($connect, $sql);
							$row = mysqli_fetch_assoc($query);
							
							$sql_1 = "select gio_thi from chi_tiet_lich_thi where ma_lich_thi='".$row['ma_lich_thi']."'";
							$query_1 = mysqli_query($connect, $sql_1);
							if($row_1 = mysqli_fetch_assoc($query_1))
							{
								echo($row_1['gio_thi']);
							}
						}
						?>
					</td>
					<td>
						<?php
						if(isset($_POST['submit']))
						{
							$sql = "select ma_phong from lich_thi where ma_cb='".$_POST['ma_cb']."'";
							$query = mysqli_query($connect, $sql);
							$row = mysqli_fetch_assoc($query);
							
							$sql_1 = "select ten_phong from phong where ma_phong='".$row['ma_phong']."'";
							$query_1 = mysqli_query($connect, $sql_1);
							
							if($row_1 = mysqli_fetch_assoc($query_1))
							{
								echo($row_1['ten_phong']);
							}
						}
						?>
					</td>
				</tr>
                </table>
                </div>
                </div>
				</form>
            <!-- InstanceEndEditable --></div>
        <!--Footer-->
   	<div class="footer">
   		<img src="/do_an_1_phuong/images/Hocvien/footer.png" alt="footer"/></div>
	</div>
</body>
<!-- InstanceEnd --></html>
