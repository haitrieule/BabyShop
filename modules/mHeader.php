
<div id="header">
	<a href="index.php">
    	<img src="img/background.jpg" width="100%" height="120">
    </a>
    	<div style="float:right">
         <form action="pages/xlTimKiem.php" method="get">
             <input type="text" name="searchtext" />
             <input type="submit" value="Tìm kiếm" name="search" />
         </form>
    </div>

    <div id="login_nav">
    	<?php
			if(isset($_SESSION["MaTaiKhoan"]))
			{
				?>
				Hello,<?php echo $_SESSION["TenHienThi"]; ?>
				<a href="modules/xlDangXuat.php">ĐĂNG XUẤT</a>
                <a href="index.php?a=5">
                	<img src="img/manage_shopping.png" height="20" />
                </a>
             	<?php
			}
			else
			{
				?>
                	<form name="frmlogin" action="modules/xlDangNhap.php" method="post" onSubmit="return KiemTraDangNhap()">
                    Tài khoản: <input name="txtUS" type="text" id="txtUS" size="12" maxlength="20" width="15">
                    Mật khẩu: <input name="txtPS" type="password" id="txtPS" size="12" maxlength="20" width="15">
                    <input type="submit" value="Đăng nhập">
                    <input type="button" value="Đăng ký" onClick="ChuyenTrangDangKy()"/>
                   </form>
                   <script type="text/javascript">
				   	function ChuyenTrangDangKy()
					{
						location = "index.php?a=6";
					}
					</script>
                 <?php
			}
		?>
	</div>
    <img src="img/header_1.png" width="100%">
    <img src="img/header_2.png" width="100%">
    </div>