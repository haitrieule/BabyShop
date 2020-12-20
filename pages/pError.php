<h1>Error 404</h1>
<?php
	if(isset($_GET["id"]))
	{
		switch($_GET["id"])
		{
			case 1:
				echo "Ten dang nhap va mat khau khong ton tai";
				break;
		}
	}
?>