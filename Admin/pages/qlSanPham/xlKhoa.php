<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id= $_GET["id"];
		$sql = "select count(*) from SanPham where MaHangSanXuat=$id";
		$result = DataProvider::ExecuteQuery($sql);
		$row = mysqli_fetch_array($result);
		if($row[0]==0)
		{
			$sql = "delete from HangSanXuat where MaHangSanXuat = $id";
		}
		else
		{
			$sql = "update HangSanXuat set BiXoa = 1-BiXoa where MaHangSanXuat = $id";
		}
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=4");
?>