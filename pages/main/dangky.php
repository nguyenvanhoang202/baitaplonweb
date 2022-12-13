
<style type="text/css">
	table.dangky tr td {
	    padding: 5px;
	}
	h3{
		color: red;
		margin-left: 300px;
	}
	h2{
		margin-left: 280px;
	}
</style>
<div>
<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$taikhoan= $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        $rematkhau=  md5($_POST['rematkhau']);
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi)
		{
			echo "<h3>Vui lòng nhập đầy đủ thông tin</h3>";
			
			
		}elseif($matkhau!=$rematkhau){
			echo "<h3>Mật khẩu không trùng khớp</h3>"; 

		}
		else{
	
			
			$sql_dangky = "INSERT INTO tbl_dangky(hovaten,taikhoan,matkhau,sodienthoai,email,diachi) VALUE('".$tenkhachhang."','".$taikhoan."','".$matkhau."','".$dienthoai."','".$email."','".$diachi."')";
			$query_dangky=mysqli_query($connect,$sql_dangky);
			if($query_dangky){
				echo '<h2 style="color:green">Bạn đã đăng ký thành công</h2>';
				$_SESSION['dangky'] = $taikhoan;
				$_SESSION['email'] = $email;
				$_SESSION['id_khachhang'] = mysqli_insert_id($connect);
				
				}
			}
		}
?>
</div>
<form class="dang-ky" action="" method="POST">
        <h1>Đăng Ký</h1>
       <div class="dk">
           <label for="">Họ và tên</label><br>
           <input type="text" name="hovaten" placeholder="Họ và tên">
       </div>
	   <div class="dk">
           <label for="">Tài Khoản</label><br>
           <input type="text" name="taikhoan" placeholder="Tài Khoản">
       </div>
       <div class="dk">
           <label for="">Mật khẩu</label><br>
           <input type="password" name="matkhau" placeholder="Mật khẩu">
       </div>
	   <div class="dk">
           <label for="">Nhập lại mật khẩu</label><br>
           <input type="password" name="rematkhau" placeholder="Nhập lại mật khẩu">
       </div>
	   <div class="dk">
           <label for="">Email</label><br>
           <input type="email" name="email" placeholder="Email">
       </div>
	   <div class="dk">
           <label for="">Số điện thoại</label><br>
           <input type="text" name="dienthoai" placeholder="Số điện thoại">
       </div>
	   <div class="dk">
           <label for="">Địa chỉ</label><br>
           <input type="text" name="diachi" placeholder="Địa chỉ">
       </div>
	<tr>
		<td><input class="nutdk" type="submit" name="dangky" value="Đăng ký"></td>
		<td><a href="index.php?quanly=dangnhap" style="text-decoration: none;">Đăng nhập nếu có tài khoản</a></td>
	</tr>
</form>
