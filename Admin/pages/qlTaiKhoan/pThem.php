<form action="pages/qlSanPham/xlThemMoi.php" method="post" enctype="multipart/form-data">
	<fieldset class="ThemTaiKhoan">
    	<legend>Thêm tài khoản</legend>
        <div>
    	<span class="label">Tên đăng nhập:</span>
        <input type="text" id="us" name="us"/>
        <span class="err" id="eUS"></span>
    </div>
    <div>
    	<span class="label">Mật khẩu:</span>
        <input type="password" id="ps" name="ps"/>
        <span class="err" id="ePS"></span>
    </div>
    <div>
    	<span class="label">Nhập lại mật khẩu:</span>
        <input type="password" id="rps"/>
        <span class="err" id="eRPS"></span>
    </div>
    <div>
    	<span class="label">Tên hiển thị:</span>
        <input type="text" id="name" name="name"/>
        <span class="err" id="eNAME"></span>
    </div>
    <div>
    	<span class="label">Địa chỉ:</span>
        <input type="text" id="add" name="add"/>
        <span class="err" id="eADD"></span>
    </div>
    <div>
    	<span class="label">Điện thoại:</span>
        <input type="text" id="tel" name="tel"/>
        <span class="err" id="eTEL"></span>
    </div>
    <div>
    	<span class="label">Email:</span>
        <input type="text" id="mail" name="mail"/>
        <span class="err" id="eMail"></span>
    </div>
    <div>
    	<span class="label"></span>
        <input style="width:auto" type="submit" value="Đăng ký"/>
    </div>
        <div>
        	<span>Loại tài khoản</span>
            <select name="cmbTK">
             <option value="Admin">Admin</option>
  <option value="User">User</option>
        </select>
        </div>
        <div>
        	<input type="submit" value="Thêm mới"/>
        </div>
    </fieldset>
</form>