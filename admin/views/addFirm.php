<div class="container-fluid">
	<h3>Thêm hãng mới</h3>
	<form method="POST" enctype="multipart/form-data">
		<fieldset class="form-group">
			<label for="exampleInputName">Tên hãng</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên hãng..." required="">
		</fieldset>
		<fieldset class="form-group">
			<label for="logo">Logo hãng</label>
			<input type="file" class="form-control-file" name="logo" id="logo" required="">
		</fieldset>

		<button type="submit" name="submit" class="btn btn-primary">Thêm</button>
		
	</form>
</div>