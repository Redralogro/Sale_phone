<div class="container-fluid">
	<h3>Cập nhật thông tin hãng</h3>
	<form method="POST" enctype="multipart/form-data">
		<fieldset class="form-group">
			<label for="exampleInputName">Tên hãng</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên hãng..." value="<?php echo $row['Firm_name']?>">
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputName">Hình ảnh hiện taị</label>
			<div><img style="width: 200px"  src="public/img/logo/<?php echo  $row['Logo'] ?>"></div>
		</fieldset>
		<fieldset class="form-group">
			<label for="logo">Thay Logo hãng</label>
			<input type="file" class="form-control-file" name="logo" id="logo">
		</fieldset>

		<button type="submit" name="submit" class="btn btn-primary">Sửa</button>
		
	</form>
</div>