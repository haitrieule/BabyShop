<h1>Thông tin chi tiết sản phẩm</h1>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />

<?php
	if(isset($_GET["id"]))
		$id = $_GET["id"];
	else
		DataProvider::ChangeURL("index.php?a=404");
	$sql ="select s.MaSanPham, s.TenSanPham, s.GiaSanPham, s.SoLuongTon, s.SoLuongXem, s.HinhURL, s.MoTa, h.TenHangSanXuat, l.TenLoaiSanPham,l.MaLoaiSanPham from SanPham s, HangSanXuat h, LoaiSanPham l where s.BiXoa = 0 and s.MaHangSanXuat = h.MaHangSanXuat and s.MaLoaiSanPham = l.MaLoaiSanPham and s.MaSanPham = $id";
	$result = DataProvider::ExecuteQuery($sql);
	$row = mysqli_fetch_array($result);
	$b=$row["MaLoaiSanPham"];
	$d = $row["MaSanPham"];
	if($row == null)
		DataProvider::ChangeURL("index.php?a=404");
?>
<div id="chitietsp">
<div id="chitietleft">
	<img id="img" src="images/<?php echo $row["HinhURL"];?>"width="400px" height="400px">
</div>
<div id="chitietright">
	<div>
    	<span>Tên sản phẩm: </span>
        <span class="productname"><?php echo $row["TenSanPham"]; ?></span>
    </div>
    <div>
    	<span>Giá: </span>
        <span class="price"><?php echo $row["GiaSanPham"]; ?>d</span>
    </div>
    <div>
    	<span>Hãng sản xuất: </span>
        <span class="factory"><?php echo $row["TenHangSanXuat"]; ?></span>
    </div>
    <div>
    	<span">Loại sản phẩm: </span>
        <span class="data"><?php echo $row["TenLoaiSanPham"]; ?></span>
    </div>
    <div>
    	<span>Số lượng: </span>
        <span class="data"><?php echo $row["SoLuongTon"]; ?> Sản phẩm</span>
    </div>
    <div>
    	<span>Số lượng xem: </span>
        <span class="data"><?php echo $row["SoLuongXem"]+1; ?></span>
    </div>
    <div class="giohang">
    	<?php
			if(isset($_SESSION["MaTaiKhoan"]))
			{
				?>
					<a href="index.php?a=5&id=<?php echo $row["MaSanPham"]; ?>">
                    <img src="img/shopping_cart.png" width="32">
                    </a>
                 <?php
			}
		?>
	</div>
    </div>
    <div id="mota">
    <span>Mô tả: </span>
    <?php echo $row["MoTa"];?>
	</div>
    <h1>Các sản phẩm cùng loại</h1>
	<div class="row">
		<?php
	$sql="select * from SanPham where BiXoa = 0 and MaLoaiSanPham = $b and MaSanPham != $d order by MaLoaiSanPham desc limit 0, 5";
	$result = DataProvider::ExecuteQuery($sql);
	while($row = mysqli_fetch_array($result))
	{
		?>
        		<div class="col-md-2">
			<div class="box">
            	<img src="images/<?php echo $row["HinhURL"]; ?>" width="200px" height="200px"/>
                <div class="pname"><?php echo $row["TenSanPham"];?></div>
                <div class="pprice">Giá:<?php echo $row["GiaSanPham"]; ?> đ</div>
                <div class="action">
                	<a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>">chi tiết</a>
                </div>
                </div>
                </div>
                <?php
	}
?></div>
</div>

<?php
	$SoLuongXem = $row["SoLuongXem"]+1;
	$sql = "update SanPham SET SoLuongXem = $SoLuongXem where MaSanPham = $id ";
	DataProvider::ExecuteQuery($sql);
?>