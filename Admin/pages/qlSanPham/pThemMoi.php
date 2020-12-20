<form action="pages/qlSanPham/xlThem.php" method="get" onsubmit="return KiemTra();" enctype="multipart/form-data">
	<fieldset class="ThemSanPham">
    	<legend>Thêm sản phẩm</legend>
        <div>
        	<span>Tên sản phẩm</span>
            <input type="text" name="txtTen" id="txtTen"/>
            <i id="errTen"></i>
        </div>
        <div>
        	<span>Hãng sản xuất</span>
            <select name="cmbHang">
            <?php
				$sql = "select * from HangSanXuat where BiXoa = 0";
				$result = DataProvider::ExecuteQuery($sql);
				while($row = mysqli_fetch_array($result)){
			?>
            <option value="<?php echo $row["MaHangSanXuat"];?>"><?php echo $row["TenHangSanXuat"];?></option>
            <?php
				}
            ?>
        </select>
        </div>
        <div>
        	<span>LoaiSanPham</span>
            <select name="cmbLoai">
            	<?php
					$sql = "select * from LoaiSanPham where BiXoa=0";
					$result= DataProvider::ExecuteQuery($sql);
					while($row = mysqli_fetch_array($result)){
						?>
                        <option value="<?php echo $row["MaLoaiSanPham"];?>"><?php echo $row["TenLoaiSanPham"];?></option>
                        <?php
					}
				?>
            </select>
        </div>
        <div>
        	<span>Hình</span>
            <input type="file" name="fHinh"/>
        </div>
        <div>
        	<span>Giá</span>
            <input type="text" name="txtGia" id="txtGia"/>
            <i id="errGia"></i>
        </div>
        <div>
        	<span>số Lượng tồn</span>
            <input type="text" name="txtTon" id="txtTon"/>
            <i id="errTon"></i>
        </div>
        <div>
        	<span>Mô tả</span>
            <textarea name="txtMoTa"></textarea>
        </div>
        <div>
        	<input type="submit" value="Thêm mới"/>
        </div>
    </fieldset>
</form>
<script type="text/javascript">
	function KiemTra()
	{
		var ten = document.getElementById("txtTen");
		var err = document.getElementById("errTen");
		if(ten.value=="")
		{
			err.innerHTML = "Tên sản phẩm không được rỗng";
			ten.focus();
			return false;
		}
		else
			err.innerHTML="";
		var ten = document.getElementById("txtGia");
		var err = document.getElementById("errGia");
		if(ten.value=="")
		{
			err.innerHTML = "Giá sản phẩm không được rỗng";
			ten.focus();
			return false;
		}
		else
			err.innerHTML="";
		var Ten = document.getElementById("txtTon");
		var err = document.getElementById("errTon");
		if(ten.value=="")
		{
			err.innerHTML = "số lượng tồn không được rỗng";
			ten.focus();
			return false;
		}
		else
			err.innerHTML="";
		
		return true;
	}
</script>