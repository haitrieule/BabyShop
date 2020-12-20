<?php
	include "file:///C|/xampp/htdocs/DoAn2/lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql = "DELETE FROM `loaisanpham` WHERE `loaisanpham`.`MaLoaiSanPham` = $id";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=3");
?>