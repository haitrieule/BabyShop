<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
<div class="row">
<h2><center>Sản phẩm mới nhất</center></h2>
<?php
	$sql = "SELECT * FROM SanPham where BiXoa =0 order by NgayNhap desc limit 0, 8";
	$result = DataProvider::ExecuteQuery($sql);
	while($row = mysqli_fetch_array($result))
	{
		?>
                <div class="col-md-3">
			<div class="box">
            	<img src="images/<?php echo $row["HinhURL"]; ?>"  width="200px" height="200px"/>
                <div class="pname"><?php echo $row["TenSanPham"];?></div>
                <div class="pprice">Giá:<?php echo $row["GiaSanPham"]; ?> đ</div>
                <div class="action">
                	<a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>">chi tiết</a>
                </div>
                </div>
                </div>
        <?php
	}
?>
</div>