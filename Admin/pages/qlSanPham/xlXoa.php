<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql = "DELETE FROM `sanpham` WHERE `sanpham`.`MaSanPham` = $id";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=4");
?>