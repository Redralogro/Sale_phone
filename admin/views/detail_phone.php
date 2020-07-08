<div class="container-fluid">
	<?php
		if (isset($_SESSION['NotiUpdateDetailPhone'])) {
		  	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Thêm thành công.
		  </div>";
		  	unset($_SESSION['NotiUpdateDetailPhone']);
		 }    
	?>
	<h3 align="center">THÔNG SỐ MÁY <?php if(isset($rs['Name'])){echo $rs['Name'];}  ?></h3>
	<div class="col-6" style="float: left;">
		<table class="table table-hover table-inverse">
			<thead>
				<tr>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th >MÔ TẢ SẢN PHẨM</th>
					<td><?php echo $row['Description'] ?></td>
				</tr>
				<tr>
					<th >SỐ LƯỢNG </th>
					<td><?php echo $row['Quatity']; ?></td>
				</tr>
				<tr>
					<th >KÍCH THƯỚC MÀN HÌNH</th>
					<td><?php echo $row['Size']; ?></td>
				</tr>
				<tr>
					<th >TRỌNG LƯỢNG</th>
					<td><?php echo $row['Weight']; ?></td>
				</tr>
				<tr>
					<th >HỆ ĐIỀU HÀNH</th>
					<td><?php echo $row['Os']; ?></td>
				</tr>
				<tr>
					<th >TỐC ĐỘ CPU</th>
					<td><?php echo $row['Cpu_speed']; ?></td>
				</tr>
				<tr>
					<th >CAMERA</th>
					<td><?php echo $row['Camera_primary']; ?></td>
				</tr>
				<tr>
					<th >PIN</th>
					<td><?php echo $row['Bettery']; ?></td>
				</tr>
				<tr>
					<th >BẢO HÀNG</th>
					<td><?php echo $row['Warranty']; ?></td>
				</tr>
				<tr>
					<th >BLUETOOTH</th>
					<td><?php echo $row['Bluetooth']; ?></td>
				</tr>
				<tr>
					<th >WLAN</th>
					<td><?php echo $row['Wlan']; ?></td>
				</tr>
				<tr>
					<th >GIÁ KHUYẾN MÃI</th>
					<td><?php echo $row['Promotion_price']; ?></td>
				</tr>
			
			</tbody>
		</table>

	</div>
	<div class="col-6" style="float: left;">
		<div>
			<h6>HÌNH ẢNH SẢN PHẨM 	</h6>
			
			<img style="width: 450px"  src="public/img/phone/<?php echo  $rs['Image'] ?>">
		</div><br>
		<a href="index.php?method=update_detailPhone&id_phone=<?php echo $row['Phone_id'] ?>">
			<button type="button" class="btn alert-danger">Update thông tin chi tiết sản phẩm</button>
		</a>

		<a href="index.php?method=listphone">
			<button type="button" class="btn btn-success">Quay lại danh sách sản phẩm</button> </a>
		<br><br>
		<a style="display: none"onclick="return confirm('Bạn có muốn xóa hay không?')" href="index.php?method=del_detailphone&id_phone=<?php echo $row['Phone_id'] ?>">
			<button type="button" class="btn btn-warning">Xóa chi tiết sản phẩm</button>
		</a>
	</div>
	
</div>