<div class="container-fluid">
	<h3>Cập nhật điện thoại mới</h3>
	<form method="POST" enctype="multipart/form-data">
		<fieldset class="form-group">
			<label for="exampleInputName">Tên điện thoại</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên điện thoại..." value="<?php echo $phones['Name'] ?>">
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputPrice">Giá</label>
			<input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá..." value="<?php echo $phones['Price'] ?>">
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputColor">Màu</label>
			<select name="color" class="form-control">
				<?php 
					foreach ($color as $key => $valueC) {
				?>
					<option value="<?php echo $valueC['Color_id']; ?>" <?php if ($valueC['Color_id'] == $phones['Color_id']) {
						echo "SELECTED";
					} ?>><?php echo $valueC['Color_name']; ?></option>
				<?php
					}
				?>
			</select>
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputRam">Ram</label>
			<select name="ram" class="form-control" >
				<?php 
					foreach ($ram as $key => $value) {
				?>
					<option value="<?php echo $value['Memory_id']; ?>" <?php if ($value['Memory_id'] == $phones['Memory_id']) {
						echo "SELECTED";
					} ?>><?php echo $value['Memory']; ?></option>
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
					<option value="<?php echo $valueF['Firm_id']; ?>" <?php if ($valueF['Firm_id'] == $phones['Firm_id']){
						echo "SELECTED";
					} ?>><?php echo $valueF['Firm_name']; ?></option>
				<?php
					}
				?>
				
			</select>
		</fieldset>
		<fieldset class="form-group">
			<label for="logo">Ảnh</label>
			<input type="file" class="form-control-file" name="img" id="logo" required="">
		</fieldset>

		<button type="submit" name="submit" class="btn btn-primary">Sửa</button>
		
	</form>
</div>