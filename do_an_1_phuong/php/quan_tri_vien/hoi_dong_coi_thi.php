<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
	$connect =	mysqli_connect('localhost','root','','do_an') or die ('ket noi that bai');
	mysqli_query($connect,'SET NAMES UTF8');
?>
<html><!-- InstanceBegin template="/Templates/My template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="/do_an_1_phuong/css/CBQL/reset.css">
<link rel="stylesheet" type="text/css" href="/do_an_1_phuong/css/CBQL/style.css">
<link rel="stylesheet" type="text/css" href="/do_an_1_phuong/css/CBQL/header.css">
<link rel="stylesheet" type="text/css" href="/do_an_1_phuong/css/CBQL/menu_tab.css">
<link rel="stylesheet" type="text/css" href="/do_an_1_phuong/css/CBQL/content.css">
<link rel="stylesheet" type="text/css" href="/do_an_1_phuong/css/CBQL/footer.css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="header"><!-- begin header --> 
  <img src="/do_an_1_phuong/images/CBQL/webdev_0008s_0000_Layer-2.png" alt="header"/> </div>
<!-- end header -->
<div class="clr"></div>
<!-- InstanceBeginEditable name="content" -->
<div id="menu"> <a id="hinh" href="#"><img src="/do_an_1_phuong/images/CBQL/webdev_0001s_0003_home.png" alt="home"/></a>
  <ul>
    <li><a href="#">Thông báo</a></li>
    <li><a href="#">Kế hoạch</a></li>
    <li><a href="#">Tạo biểu mẫu</a></li>
    <li><a href="#">Hộp thư</a></li>
    <li><a href="#">Chấm thi</a></li>
    <li><a href="#">Thông tin</a></li>
  </ul>
</div>
<div id="function">
  <h1>Chức năng trực tuyến</h1>
  <h2>Tìm kiếm thông tin:</h2>
	<input type="text" name="timkiem" id="timkiem"/>
  <ul>
    <li><a href="#">Xếp lớp học</a></li>
    <li><a href="/do_an_1_phuong/php/quan_tri_vien/xep_lich_thi.php">Xếp lớp thi</a></li>
    <li><a href="#">Gửi yêu cầu</a></li>
  </ul>
</div>
<div id="content">
  <h1>Phân công hội đồng coi thi</h1>
 
  <div id="table">
    <table width="90%" border="1" cellspacing="0">
      <tr>
        <th  height="39">STT</th>
        <th >Mã cán bộ</th>
        <th >Tên cán bộ</th>
        <th >giới tính</th>
        <th >Quê quán</th>
        <th >chức vụ</th>
        <th >Xử lý</th>
        
      </tr>
       <?php
	  	$query = "SELECT * from can_bo, chuc_vu WHERE chuc_vu.ma_cv=can_bo.ma_cv";
		$result = mysqli_query($connect,$query);
		if(mysqli_num_rows($result)>0){
			$i =0;
			while ($row =mysqli_fetch_assoc($result)){
				$i++;
				$ma_cb =$row['ma_cb'];
				$ten_cb=$row['ten_cb'];
				if ($row['gioi_tinh']==1){
					$gioi_tinh="Nam";}
					else 
					$gioi_tinh="Nữ";
				$que_quan=$row['que_quan'];
				$ten_cv=$row['ten_cv'];
				echo "<tr>
					  <td>$i</td>
					  <td>$ma_cb</td>
				      <td>$ten_cb</td>
					  <td>$gioi_tinh</td>
					  <td>$que_quan</td>
                	  <td>$ten_cv</td>
					  <td><a href='/do_an_1_phuong/php/quan_tri_vien/xoahd.php?id=$ma_cb'>xóa</a>|<a href='/do_an_1_phuong/php/quan_tri_vien/sua_hd.php?page=sua_hd&ma_cb=".$ma_cb."'>Sửa</a></td>
				      </tr>";
			}
		}
	  ?>
    </table>
  </div>
  <div id="button2">
    <ul>
      
      <li><a href="/do_an_1_phuong/php/quan_tri_vien/them_hd.php">Thêm cán bộ</a></li>
      
    </ul>
  </div>
</div>
<div id="taikhoan">
  <h1>Tài khoản</h1>
  <ul>
  <li><a href="#">Đăng Xuất</a></li>
  <li><a href="#">Đổi mật khẩu</a></li>
  </ul>
</div>
<div id="function2">
  <h1>Chức năng</h1>
  <ul>
    <li><a href="#">Nhập điểm</a></li>
    <li><a href="#">Xem lịch dạy</a></li>
    <li><a href="#">Xem lịch coi thi</a></li>
    <li><a href="#">Báo cáo</a></li>
    <li><a href="#">Danh sách thí sinh</a></li>
    <li><a href="/do_an_1_phuong/php/quan_tri_vien/quan_ly_can_bo.php">Phân công hội đồng coi thi</a></li>
    <li><a href="/do_an_1_phuong/php/quan_tri_vien/quan_ly_can_bo.php">Phân công cán bộ coi thi</a></li>
  </ul>
</div>
<!-- InstanceEndEditable -->
<div class="footer"> <img src="/do_an_1_phuong/images/CBQL/footer.png"/> </div>
</body>
<!-- InstanceEnd --></html>
