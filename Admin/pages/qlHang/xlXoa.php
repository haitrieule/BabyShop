<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql = "DELETE FROM `hangsanxuat` WHERE `hangsanxuat`.`MaHangSanXuat` = $id";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=4");
?>