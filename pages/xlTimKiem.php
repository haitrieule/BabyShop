<h1>Trang kết quả tìm kiếm</h1>
<?php
	session_start();
	include"../lib/DataProvider.php";
	if(isset($_GET['search']))
	{
		$search =$_GET['searchtext'];
		$sql ="select * from  SanPham where TenSanPham like '%$search%'";
		$result = DataProvider::ExecuteQuery($sql);
		//DataProvider::ChangeURL("../pages/pTimKiem.php");
	}
	?>
<h2>Trả về kết quả tìm kiếm cho: <?php echo "$search";?></h2>
    <?php
	if ($result) {
    // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
    // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
    while ($row=mysqli_fetch_row($result)) {
        
		 echo '<tr>';
		 	echo "<span>Tên sản phẩm: </span>";				
			echo "<td>{$row[1]}</td><br>";
			echo "<span>Giá cả: </span>";
			echo "<td>{$row[3]}</td><br>";
			echo "<span>số lượng còn lại: </span>";
			echo "<td>{$row[5]}</td><br>";;
         echo '</tr>';
		 ?>
		 <div class='action'>
                	<a href='../index.php?a=4&id=<?php echo $row[0]; ?>'>chi tiết</a>
                </div>
		 <hr>
         <?php
    }

    // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
    // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
    //mysqli_free_result($result);
}
?>
<a href="../index.php">trở về</a>
