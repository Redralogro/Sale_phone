<div class="container-fluid">
	<h3>Update thông tin chi tiết điện thoại</h3>
	<form  method="POST" enctype="multipart/form-data">
		
		<fieldset class="form-group">
			<label >Số lượng</label>
			<input type="number" class="form-control" name="Quatity" id="" placeholder="Nhập số lượng ..." value="<?php echo $detail['Quatity'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Kích thước màn hình</label>
			<input type="text" class="form-control" name="Size" id="" placeholder="Nhập kích thước màn ..." value="<?php echo $detail['Size'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Trọng lượng</label>
			<input type="text" class="form-control" name="Weight" id="" placeholder="Nhập trọng lượng ..." value="<?php echo $detail['Weight'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Hệ điều hành</label>
			<input type="text" class="form-control" name="Os" id="" placeholder="Nhập hệ điều hành ..." value="<?php echo $detail['Os'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Tốc độ CPU</label>
			<input type="text" class="form-control" name="Cpu_speed" id="" placeholder="Nhập tốc độ CPU ..." value="<?php echo $detail['Cpu_speed'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Camera</label>
			<input type="text" class="form-control" name="Camera_primary" id="" placeholder="Nhập camera ..." value="<?php echo $detail['Camera_primary'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Pin</label>
			<input type="text" class="form-control" name="Bettery" id="" placeholder="Nhập dung lượng pin ..." value="<?php echo $detail['Bettery'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Bảo hành</label>
			<input type="text" class="form-control" name="Warranty" id="" placeholder="Nhập bảo hành ..." value="<?php echo $detail['Warranty'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >BlueTooth</label>
			<input type="text" class="form-control" name="Bluetooth" id="" placeholder="Nhập bluetooth..." value="<?php echo $detail['Bluetooth'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Wlan</label>
			<input type="text" class="form-control" name="Wlan" id="" placeholder="Nhập Wlan ..." value="<?php echo $detail['Wlan'] ?>">
			
		</fieldset>
		<fieldset class="form-group">
			<label >Giá khuyến mãi</label>
			<input type="text" class="form-control" name="Promotion_price" id="" placeholder="Nhập giá khuyến mãi..." value="<?php echo $detail['Promotion_price'] ?>">
			
		</fieldset>

		<fieldset class="form-group">
			<label >Mô tả sản phẩm</label>
			<textarea class="form-control ckeditor" id="content" name="Description">
				<?php echo $detail['Description'] ?>
			</textarea>
			
			
			<!-- <input type="text" class="form-control" id="content" name="Description"placeholder="Nhập mô tả ..." value="<?php echo $detail['Description'] ?>"> -->
			
		</fieldset>
		
		<button type="submit" name="OK" class="btn btn-primary">Submit</button>
	</form>

</div>