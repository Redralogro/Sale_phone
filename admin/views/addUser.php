<div class="container-fluid">
	<div class="row">
	<?php 
	
	if (isset($_SESSION['errorAdd'])) {
		echo "<div class='alert alert-info'>
		<a class='close' data-dismiss='alert'>&times;</a>
		<strong>Nhắc nhở!</strong> ".$_SESSION['errorAdd'].".
	</div>";
		unset($_SESSION['errorAdd']);
   } 
	if (isset($_SESSION['errorImage'])) {
		echo "<div class='alert alert-info'>
		<a class='close' data-dismiss='alert'>&times;</a>
		<strong>Nhắc nhở!</strong> ".$_SESSION['errorImage'].".
	</div>";
		unset($_SESSION['errorImage']);
	} 
	if (isset($_SESSION['errorPhone'])) {
		echo "<div class='alert alert-info'>
		<a class='close' data-dismiss='alert'>&times;</a>
		<strong>Nhắc nhở!</strong> ".$_SESSION['errorPhone'].".
	</div>";
		unset($_SESSION['errorPhone']);
	} 
	if (isset($_SESSION['errorEmail'])) {
		echo "<div class='alert alert-info'>
		<a class='close' data-dismiss='alert'>&times;</a>
		<strong>Nhắc nhở!</strong> ".$_SESSION['errorEmail'].".
	</div>";
		unset($_SESSION['errorEmail']);
	} 


if (isset($_SESSION['errorPassEdit'])) {
	echo "<div class='alert alert-info'>
	<a class='close' data-dismiss='alert'>&times;</a>
	<strong>Nhắc nhở!</strong> ".$_SESSION['errorPassEdit'].".
</div>";
	unset($_SESSION['errorPassEdit']);
} 

	

	?>
		<div class="col-12">
			<h3>Thêm tài khoản</h3>
			<form method="POST" enctype="multipart/form-data">
				<fieldset class="form-group">
					<label for="">Name</label>
					<br>
					<span id="NAME" style="color:red;"></span>
					<input type="text" onblur="checkRegex()" class="form-control" name="name" id="name" placeholder="Nhập tên của bạn..." required="">
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Phone</label><br>
					<span id="PhoneNumber" style="color:red;"></span>
					<input type="text" onblur="checkPhone_number()" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại của bạn..." required="">
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Email </label><br>
					<span id="EMAIL" style="color:red;"></span>
					<input type="text"  onblur="checkEmail()"class="form-control" name="email" id="email" placeholder="Enter email..." required="" >
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Password</label><br>
					<span id="PASS" style="color:red;"></span>
					<input type="password" onblur="checkPass()" class="form-control" name="pass" id="pass" placeholder="Nhập mật khẩu..." required="">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Nhập lại Password</label>
					<br>
					<span id="checkPass" ></span>
					<input type="password" onblur="Match_password()"onkeyup="Match_password()"class="form-control" name="check" id="check" placeholder="Nhập lại mật khẩu..." required="">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Chọn loại tài khoản</label>
					<select class="form-control" id="" name="acc">
						<option value="1">Tài khoản admin</option>
						<option value="2">Tài khoản thường</option>
					</select>
				</fieldset>

				<fieldset class="form-group">
					<label for="user">Ảnh</label>
					<input type="file" class="form-control" name="user" id="user"  required="">
				</fieldset>
				<button type="submit" name="submit" class="btn btn-primary">Thêm</button>
			</form>
		</div>
	</div>
</div>
