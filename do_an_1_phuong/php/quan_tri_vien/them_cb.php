<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	<?php
	session_start();
	?>
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
  <h1>Cán bộ coi thi</h1>
  <form  method="post" action="/do_an_1_phuong/xu_ly_them_cb.php">
  <table width="400px" border="0" align="center" style="margin:10px auto; ">
 	 <tr>
    	<td> Mã cán bộ</td>
        <td><input name="macb" id="macb" type="text" required /></td>
     </tr>
  	<tr>
    	<td> Tên cán bộ</td>
        <td><input name="tencb" id="tencb" type="text" required /></td>
     </tr>
     <tr>
   		  <td> Giới tính</td>
    	 <td> 
			 Nam <input type="radio" name="gioitinh" value="1" required />
			 Nữ <input type="radio" name="gioitinh" value="0" required />
         </td>
     </tr>
     <tr>
     	<td>Quê quán</td>
        <td><input name="quequan" id="quequan" type="text" required /></td>
     </tr>
     <tr>
     	<td>Mã phòng</td>
        <td><input name="maphongthi" id="phongthi" type="text" required /></td>
     </tr>
	  <tr>
     	<td>Tên phòng</td>
        <td><input name="tenphongthi" id="phongthi" type="text" required /></td>
     </tr>
     <tr>
     	<td colspan="2" align="center"><input type="submit" value="thêm" name="insert" /></td>
        </tr>
        </table>
        
        </form>
  		
  <div id="table"></div>
  <div id="button2">  </div>
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
