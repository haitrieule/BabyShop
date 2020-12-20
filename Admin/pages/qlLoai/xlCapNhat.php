<?php
include "../../../lib/DataProvider.php";
if(isset($_GET["id"]))
{
	$id = $_GET["id"];
	$ten = $_GET["txtTen"];
	$sql = "update LoaiSanPham set TenLoaiSanPham ='$ten' where MaLoaiSanPham= $id";
	DataProvider::ExecuteQuery($sql);
}
DataProvider::ChangeURL("../../index.php?c=3");
?>