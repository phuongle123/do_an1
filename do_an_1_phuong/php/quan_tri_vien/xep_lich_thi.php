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
 <h1>Xếp lịch thi</h1>
  <div id="button"> </div>
  <div id="infor">
    <ul>
      <li>Khóa:</li>
      <select name="select">
        <option>Ứng dụng tin học cơ bản</option>
        <option>Ứng dụng tin học nâng cao</option>
      </select></ul>
      
     
  </div>
  <div id="infor3">
    <ul>
  		<li>Phòng thi:  <input name="phongthi" id="phongthi" type="text"/></li>
   </ul>
  </div>
  <div id="infor3">
    <ul>
  		<li>Ngày thi:<input name="ngaythi" id="ngaythi" type="text"/>      </li>
      <li>Giờ thi: <input name="giothi" id="giothi" type="text"/>    </li>
      
   </ul>
  </div>
  <div id="table">
     <table border="1" cellspacing="0" width="90%">
    	<tr>
        	<th>STT</th>
            <th>Mã học viên </th>
            <th>Tên học viên </th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Quê quán</th>
            <th>Ghi chú</th>
       
       </tr>
      <?php
	  	$query = "SELECT * from hoc_vien";
		$result = mysqli_query($connect,$query);
		if(mysqli_num_rows($result)>0){
			$i =0;
			while ($row =mysqli_fetch_assoc($result)){
				$i++;
				$ma_hv =$row['ma_hv'];
				$ten_hv=$row['ten_hv'];
				if ($row['gioi_tinh']==1){
					$gioi_tinh="Nam";}
					else 
					$gioi_tinh="Nữ";
				$ngay_sinh=$row['ngay_sinh'];
				$que_quan=$row['que_quan'];
				
				echo "<tr>
					  <td>$i</td>
					  <td>$ma_hv</td>
					  <td>$ten_hv</td>
					  <td>$gioi_tinh</td>
					  <td>$ngay_sinh</td>
					  <td>$que_quan</td>
					  <td></td>
					  </tr>";
			}
		}
	  ?>
      
    </table>
   
  </div>
  <div id="input">
  	<input type="submit" value="Lưu lịch thi"  name"insert"/>
  </div>
  <?php
  if(isset($insert))
  {
	  $sql = "insert into chi_tiet_lich_thi(gio_thi) values ('.$gio_thi.')";
	  $sql = "insert into phong(phong_thi) values ('.$phong_thi.')";
	  $sql = "insert into lichthi(ngay_thi) values ('.$ngay_thi.')";
	  mysqli_query($connect,$sql);  
	}
  ?>
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
