<?php
	session_start();
	include"../../lib/DataProvider.php";
	include"../../lib/ShoppingCart.php";
	if(isset($_SESSION["GioHang"]))
	{
		$gioHang = unserialize($_SESSION["GioHang"]);
		$maTaiKhoan = $_SESSION["MaTaiKhoan"];
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$ngayLap = date("Y-m-d H:i:s");
		$ngayLapTam = date("Y-m-d");
		$maTinhTrang = 1;
		$tongGia = $_SESSION["TongGia"];		
		$sql = "select MaDonDatHang from DonDatHang where NgayLap like '$ngayLapTam%' order by MaDonDatHang desc limit 1";
		$result = DataProvider::ExecuteQuery($sql);
		$row = mysqli_fetch_array($result);
		$sttMaDonDatHang = 0;
		if($row !=null)
		{
			$sttMaDonDatHang = substr($row["MaDonDatHang"],6,3);
		}
		$sttMaDonDatHang+=1;
		$sttMaDonDatHang = sprintf("%03s", $sttMaDonDatHang);
		$maDonDatHang = date("d").date("m").substr(date("y"),2,2).$sttMaDonDatHang;
		$sql= "insert into DonDatHang(MaDonDatHang,NgayLap,TongThanhTien,MaTaiKhoan, MaTinhTrang) values('$maDonDatHang','$ngayLap', '$tongGia', '$maTaiKhoan', '$maTinhTrang')";
		DataProvider::ExecuteQuery($sql);
		$soLuongSanPham = count($gioHang->listProduct);
		for($i = 0; $i <$soLuongSanPham; $i++)
		{
			$id = $gioHang->listProduct[$i]->id;
			$sl = $gioHang->listProduct[$i]->num;
			
			$sql = "select GiaSanPham, SoLuongTon from SanPham where MaSanPham = $id";
			$result = DataProvider::ExecuteQuery($sql);
			$row = mysqli_fetch_array($result);
			$soLuongTonHienTai = $row["SoLuongTon"];
			$giaSanPham = $row["GiaSanPham"];
			$sttChiTietDonDatHang= sprintf($i);
			$maChiTietDonDatHang = $maDonDatHang.$sttChiTietDonDatHang;
			$sql ="insert into ChiTietDonDatHang(MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham) values('$maChiTietDonDatHang', '$sl', '$giaSanPham','$maDonDatHang','$id')";
			DataProvider::ExecuteQuery($sql);
			$soLuongTonMoi= $soLuongTonHienTai-$sl;
			$sql = "update SanPham set SoLuongTon = $soLuongTonMoi where MaSanPham = $id";
			DataProvider::ExecuteQuery($sql);
		}
		unset($_SESSION["GioHang"]);
		DataProvider::ChangeURL("../../index.php?a=5&sub=2");
	}
	else
		DataProvider::ChangeURL("../../index.php?a=404");
?>