<?php
	include"../../../lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql ="select count(*) from SanPham where MaLoaiSanPham = $id";
		$result = DataProvider::ExecuteQuery($sql);
		$row = mysqli_fetch_array($result);
		if($row[0]==0)
		{
			$sql = "delete from LoaiSanPham where MaLoaiSanPham = $id";
		}
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=3");
?>
