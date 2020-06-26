<div class="container-fluid">
	<div class="row">

		<div class="col-12">
			<h3>Sửa thông tin đơn hàng</h3>
			<form method="POST">
				<fieldset class="form-group">
					<label >Địa chỉ giao</label>
					<input type="text" class="form-control" id="Delivery_addres" name="Delivery_addres" placeholder="Đia chỉ giao hàng" value="<?php echo $row['Delivery_addres'] ?>">
				</fieldset>
				
				<fieldset class="form-group">
					<label >Ghi chú</label>
					<textarea  class="form-control" name="Note" id="" cols="30" rows="10">
						<?php echo $row['Note'] ?>
					</textarea >
				</fieldset>
				<button type="submit" name="OK" class="btn btn-primary">Sửa</button>
			</form>
		</div>
	</div>
</div>