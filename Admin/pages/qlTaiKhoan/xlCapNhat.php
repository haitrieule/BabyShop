<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
		//$MaloaiTaiKhoan = $_GET["cmbLoaiTaiKhoan"];
		$sql ="update TaiKhoan SET MaLoaiTaiKhoan = ${_GET["cmbLoaiTaiKhoan"]} where MaTaiKhoan = $id";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=1");
	?>