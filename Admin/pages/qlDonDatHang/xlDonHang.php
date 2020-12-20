<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
		$a = $_GET["a"];
		$sql = "update DonDatHang set MaTinhTrang = $a where MaDonDatHang = $id";
		DataProvider::ExecuteQuery($sql);
		if(a==4)
		{
			$sql = "select MaSanPham, SoLuong from ChiTietDonDatHang where MaDonDatHang = $id";
			$result =DataProvider::ExecuteQuery($sql);
			while($row = mysqli_fetch_array($result))
			{
				$soLuong = $row["SoLuong"];
				$maSanPham = $row["MaSanPham"];
				$sql = "update SanPham set SoLuongTon = SoLuongTon +$soLuong where MaSanPham = $maSanPham";
			}
		}
	}
	DataProvider::ChangeURL("../../index.php?c=5");
	?>