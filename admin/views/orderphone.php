<div class="container-fluid">
	<table class="table table-hover table-inverse">
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
				$stt =0;
				foreach ($row as $key => $value) {
				$stt +=1;
			?>	
				<tr>
					<td><?php echo $stt; ?></td>
					<td><?php foreach ($customer as $key => $value1) {
						if ($value1['Customer_id'] == $value['Customer_id']) {
							echo $value1['Customer_name'];
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
							<a href="#">
								<button class="btn btn-primary">Sửa</button>
							</a>
							<a onclick="return comfirm('Bạn có muốn hủy đơn hàng này không?')" href="index.php?method=ComfirmOrder&id_order=<?php echo $value['Order_id'] ?>&action=Cancel">
								<button class="btn btn-primary">Hủy</button>
							</a>
						<?php
							}
						?>
						
						<?php
							if ($value['Status_id'] == 1) {
						?>
								<a onclick="return comfirm('Bạn có muốn xác nhận đơn hàng này không?')" href="index.php?method=ComfirmOrder&id_order=<?php echo $value['Order_id'] ?>&action=Comfirm">
									<button class="btn btn-success">Xác nhận đơn hàng</button>
								</a>
						<?php
							}elseif ($value['Status_id'] == 2) {
						?>
							<a onclick="return comfirm('Bạn có muốn xác nhận đơn hàng này là đã giao không?')" href="index.php?method=ComfirmOrder&id_order=<?php echo $value['Order_id'] ?>&action=OK">
									<button class="btn btn-success">Xác nhận đã giao</button>
								</a>
						<?php
							}
						?>
						
					</td>
				</tr>
			<?php
				  }  
			?>
			
		</tbody>
	</table>
</div>