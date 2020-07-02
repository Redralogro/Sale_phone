<div class="container-fluid">
	<h3>Thêm điện thoại mới</h3>
	<form method="POST" enctype="multipart/form-data">
		<fieldset class="form-group">
			<label for="exampleInputName">Tên điện thoại</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên điện thoại...">
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputPrice">Giá</label>
			<input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá...">
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputColor">Màu</label>
			<select name="color" class="form-control">
				<?php 
					foreach ($color as $key => $valueC) {
				?>
					<option value="<?php echo $valueC['Color_id']; ?>"><?php echo $valueC['Color_name']; ?></option>
				<?php
					}
				?>
			</select>
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputRam">Ram</label>
			<select name="ram" class="form-control">
				<?php 
					foreach ($ram as $key => $value) {
				?>
					<option value="<?php echo $value['Memory_id']; ?>"><?php echo $value['Memory']; ?></option>
				<?php
					}
				?>
				
			</select>
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputFirm">Hãng</label>
			<select name="firm" class="form-control">
				<?php 
					foreach ($firm as $key => $valueF) {
				?>
					<option value="<?php echo $valueF['Firm_id']; ?>"><?php echo $valueF['Firm_name']; ?></option>
				<?php
					}
				?>
				
			</select>
		</fieldset>
		<fieldset class="form-group">
			<label for="logo">Ảnh</label>
			<input type="file" class="form-control-file" name="img" id="logo">
		</fieldset>

		<button type="submit" class="btn btn-primary">Thêm</button>
		
	</form>
</div>