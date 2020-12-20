<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["txtTen"]))
	{
		$ten=$_GET["txtTen"];
		$hang=$_GET["cmbHang"];
		$loai=$_GET["cmbLoai"];
		$hinh=$_GET["fHinh"];
		$gia=$_GET["txtGia"];
		$soluongton=$_GET["txtTon"];
		$mota=$_GET["txtMoTa"];
		$sql="INSERT INTO `sanpham` (`TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuongXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) VALUES('$ten','$hinh','$gia',now(),'$soluongton',0,0,'$mota',0,'$loai','$hang')";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=2");
?>