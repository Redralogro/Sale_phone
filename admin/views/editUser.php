<?php 

if (isset($_SESSION['errorEdit'])) {
	echo "<div class='alert alert-info'>
	<a class='close' data-dismiss='alert'>&times;</a>
	<strong>Nhắc nhở!</strong> ".$_SESSION['errorEdit'].".
</div>";
	unset($_SESSION['errorEdit']);
} 
if (isset($_SESSION['errorImageEdit'])) {
	echo "<div class='alert alert-info'>
	<a class='close' data-dismiss='alert'>&times;</a>
	<strong>Nhắc nhở!</strong> ".$_SESSION['errorImageEdit'].".
</div>";
	unset($_SESSION['errorImageEdit']);
} 
if (isset($_SESSION['errorPhoneEdit'])) {
	echo "<div class='alert alert-info'>
	<a class='close' data-dismiss='alert'>&times;</a>
	<strong>Nhắc nhở!</strong> ".$_SESSION['errorPhoneEdit'].".
</div>";
	unset($_SESSION['errorPhoneEdit']);
} 
if (isset($_SESSION['errorEmailEdit'])) {
	echo "<div class='alert alert-info'>
	<a class='close' data-dismiss='alert'>&times;</a>
	<strong>Nhắc nhở!</strong> ".$_SESSION['errorEmailEdit'].".
</div>";
	unset($_SESSION['errorEmailEdit']);
} 
if (isset($_SESSION['errorPassEdit'])) {
	echo "<div class='alert alert-info' >
	<a class='close' data-dismiss='alert'>&times;</a>
	<strong>Nhắc nhở!</strong> ".$_SESSION['errorPassEdit'].".
</div>";
	unset($_SESSION['errorPassEdit']);
} 
 
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h3>Sửa tài khoản</h3>
			<form method="POST" enctype="multipart/form-data" action="index.php?method=editUser&id_user=<?php echo $id;?>">
				<fieldset class="form-group">
					<label for="">Name</label>
					<br>
					<span id="NAME" name="NAME" style="color:red;"></span>
					<input type="text" onblur="checkRegex()"class="form-control" name="name"  value="<?php echo $rs['Name']?>"id="name" placeholder="Nhập tên của bạn..." required="">
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Phone</label>
					<br>
					<span id="PhoneNumber" style="color:red;"></span>
					<input type="text"onblur="checkPhone_number()"  class="form-control" name="phone" value="<?php echo $rs['number_phone']?>" id="phone" placeholder="Nhập số điện thoại của bạn..." required="">
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Email </label>
					<br>
					<span id="EMAIL" style="color:red;"></span>
					<input type="text"  onblur="checkEmail()"class="form-control" name="email"  value="<?php echo $rs['Email']?>" id="email" placeholder="Enter email..." required="">
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Password</label>
					<br>
					<span id="PASS" style="color:red;"></span>
					<input type="password" onblur="checkPass()"class="form-control" name="pass" id="pass" placeholder="Nhập mật khẩu..." required="">
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
						<option value="1" >Admin</option>
						<option value="2" >Thường</option>
						
						
						
						
					</select>
				</fieldset>

				<fieldset class="form-group">
					<label for="user_im">Ảnh</label>
					<input type="file" class="form-control" name="user_im" id="user_im"  required="">
				</fieldset>
				<button type="submit"  name="submit" class="btn btn-primary">Sửa</button>
			</form>
		</div>
	</div>
</div>