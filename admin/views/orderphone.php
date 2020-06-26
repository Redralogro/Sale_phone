<div class="container-fluid">
	<h3>Đơn hàng</h3>
	<?php
		


		if (isset($_SESSION['notiDel']) == 1) {
		  	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Xóa thành công.
		  </div>";
		  	unset($_SESSION['notiDel']);
		 }elseif (isset($_SESSION['notiDel']) == 2){
		 	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Xóa không thành công.
		  </div>";
		  	unset($_SESSION['notiDel']);
		}

		if (isset($_SESSION['notiUpdateOrderPhone'])) {
		  	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Sửa thành công.
		  </div>";
		  	unset($_SESSION['notiUpdateOrderPhone']);
		 } 

		if (isset($_SESSION['notiOK'])) {
		  	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Giao hàng thành công.
		  </div>";
		  	unset($_SESSION['notiOK']);
		 } 


		if (isset($_SESSION['notiComfirm'])) {
		  	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Đã xác nhận đơn hàng.
		  </div>";
		  	unset($_SESSION['notiComfirm']);
		 }  


		 if (isset($_SESSION['notiCancel'])) {
		  	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Hủy đơn hàng thành công.
		  </div>";
		  	unset($_SESSION['notiCancel']);
		 }  

		

		  
	?>
	<table class="table table-hover table-inverse table-responsive" id="datatable" width="100%">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên khách hàng</th>
				<th>Ngày đặt</th>
				<th>Nhân viên giao hàng giao</th>
				<th>Địa chỉ giao</th>
				<th>Ghi chú</th>
				<th>Tổng tiền</th>
				<th>Tình trạng</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if (!empty($row)) {
					
				
				$stt =0;
				foreach ($row as $key => $value) {
				$stt +=1;
			?>	
				<tr>
					<td><?php echo $stt; ?></td>
					<td><?php foreach ($customer as $key => $value1) {
						if ($value1['Customer_id'] == $value['Customer_id']) {
							echo $value1['Customer_name'];
							$email=$value1['Customer_email'];
						}
					}  ?></td>
					<td><?php echo $value['Create_date']; ?></td>
					<td>
						<?php foreach ($deliverer as $key => $value2) {
							if ($value2['Deliverer_id'] == $value['Deliverer_id']) {
								echo $value2['Deliverer_name'];
							}
						}  ?>
							
					</td>
					<td><?php echo $value['Delivery_addres']; ?></td>
					<td><?php echo $value['Note']; ?></td>
					<td><?php echo $value['Total_price']; ?></td>
					<td>
						<?php
							foreach ($status as $key => $value3) {
							  	if ($value3['Status_id'] == $value['Status_id']) {
							  		echo $value3['Status'];
							  	}				 

							}  
						?>
						</td>
					<td>
						<a href="index.php?method=detail_order&id_Order=<?php echo $value['Order_id'] ?>">
								<button class="btn btn-primary">Chi tiết</button>
							</a>
						<?php
							if ($value['Status_id'] == 3 || $value['Status_id'] == 4  ||  $value['Status_id'] == 2) {
						?>
							
						<?php
							}elseif ($value['Status_id'] != 3 || $value['Status_id'] != 4 ) {
						?>
							<a href="index.php?method=editOrderPhone&id_OrderPhone=<?php echo $value['Order_id'] ?>">
								<button class="btn btn-primary">Sửa</button>
							</a>
							<a onclick="return confirm('Bạn có muốn hủy đơn hàng này không?')" href="index.php?method=ComfirmOrder&id_order=<?php echo $value['Order_id'] ?>&action=Cancel">
								<button class="btn btn-primary">Hủy</button>
							</a>
						<?php
							}
						?>
						
						<?php
							if ($value['Status_id'] == 1) {
						?>
								<a onclick="return confirm('Bạn có muốn xác nhận đơn hàng này không?')" href="index.php?method=ComfirmOrder&id_order=<?php echo $value['Order_id'] ?>&action=Comfirm&name=<?php echo  $value1['Customer_name'];?>&email=<?php echo $email?>">
									<button class="btn btn-success">Xác nhận đơn hàng</button>
								</a>
						<?php
							}elseif ($value['Status_id'] == 2) {
						?>
							<a onclick="return confirm('Bạn có muốn xác nhận đơn hàng này là đã giao không?')" href="index.php?method=ComfirmOrder&id_order=<?php echo $value['Order_id'] ?>&action=OK">
									<button class="btn btn-success">Xác nhận đã giao</button>
								</a>
						<?php
							}


						?>
						<a onclick="return confirm('Bạn có thực muốn xóa đơn hàng này không?')" <?php if($_SESSION['status1'] != 1){
						    echo 'style="display: none"';
						  } ?>  href="index.php?method=ComfirmOrder&id_order=<?php echo $value['Order_id'] ?>&action=Del">
									<button class="btn btn-warning">Xóa</button>
								</a>
						
					</td>
				</tr>
			<?php
				  } 
				 }else{
				 	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Chưa có đơn hàng.
		  </div>";
				 } 
			?>
			
		</tbody>
	</table>
</div>

  