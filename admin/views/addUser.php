<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h3>Thêm tài khoản</h3>
			<form method="POST">
				<fieldset class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" id="" placeholder="Nhập tên của bạn..." required="">
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Phone</label>
					<input type="text" class="form-control" name="phone" id="" placeholder="Nhập số điện thoại của bạn..." required="">
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Email </label>
					<input type="email" class="form-control" name="email" id="" placeholder="Enter email..." required="">
					
				</fieldset>
				<fieldset class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="pass" id="" placeholder="Nhập mật khẩu..." required="">
				</fieldset>
				<fieldset class="form-group">
					<label for="">Chọn loại tài khoản</label>
					<select class="form-control" id="" name="acc">
						<option value="1">Tài khoản admin</option>
						<option value="2">Tài khoản thường</option>
					</select>
				</fieldset>

				<fieldset class="form-group">
					<label for="">Ảnh</label>
					<input type="file" class="form-control" name="logo" id=""  required="">
				</fieldset>
				<button type="submit" name="submit" class="btn btn-primary">Thêm</button>
			</form>
		</div>
	</div>
</div>