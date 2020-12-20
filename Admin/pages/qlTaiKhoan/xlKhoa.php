<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql ="update TaiKhoan set BiXoa= 1-BiXoa where MaTaiKhoan = $id";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=1");
	?>
	