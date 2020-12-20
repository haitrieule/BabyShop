<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$ten=$_GET["txtTen"];
		$hang=$_GET["cmbHang"];
		$loai=$_GET["cmbLoai"];
		$hinh=$_GET["fHinh"];
		$gia=$_GET["txtGia"];
		$soluongton=$_GET["txtTon"];
		$soluongban=$_GET["txtBan"];
		$mota=$_GET["txtMoTa"];
		$sql = "update sanpham set TenSanPham = '$ten',MaHangSanXuat='$hang',MaLoaiSanPham='$loai',HinhURL='$hinh',GiaSanPham='$gia',SoLuongTon='$soluongton',SoLuongBan='$soluongban',MoTa='$mota' where MaSanPham = $id";
		DataProvider::ExecuteQuery($sql);
		
	}
	DataProvider::ChangeURL("../../index.php?c=2");
	?>
	