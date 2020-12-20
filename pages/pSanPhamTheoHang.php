<h2><center>Sản phẩm theo hãng</center></h2>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
<?php
	if(isset($_GET["id"]))
		$id = $_GET["id"];
	else
		DataProvider::ChangeURL("index.php?a=404");
	$sql="select * from SanPham where BiXoa = 0 and MaHangSanXuat = $id";
	$result = DataProvider::ExecuteQuery($sql);
	while($row = mysqli_fetch_array($result))
	{
		?>
        <div class="col-md-3">
			<div class="box">
            	<img src="images/<?php echo $row["HinhURL"]; ?>" width="200px" height="200px"/>
                <div class="pname"><?php echo $row["TenSanPham"];?></div>
                <div class="pprice">Giá:<?php echo $row["GiaSanPham"]; ?> đ</div>
                <div class="action">
                	<a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                </div>
                </div>
                </div>
                <?php
	}
?>
