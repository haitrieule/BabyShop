<?php
class DataProvider
{
	public static function ExecuteQuery($sql)
	{
		$connection = mysqli_connect('localhost','root','','babyshop') or die('không thể kết nói tối localhost');
		mysqli_query($connection, "set names 'utf8'");
		$result = mysqli_query($connection, $sql);
		mysqli_close($connection);
		return $result;
	}
	public static function ChangeURL($path)
	{
		echo '<script type = "text/javascript">';
		echo 'location = "'.$path.'";';
		echo '</script>';
	}
}
?>