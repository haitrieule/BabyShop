<?php
	include "../../../lib/DataProvider.php";
	if(isset($_GET["txtTen"]))
	{
		$ten=$_GET["txtTen"];
		$sql="insert into LoaiSanPham(TenLoaiSanPham, BiXoa) values('$ten',0)";
		DataProvider::ExecuteQuery($sql);
	}
	DataProvider::ChangeURL("../../index.php?c=3");
	?>