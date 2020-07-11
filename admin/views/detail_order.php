<div class="container-fluid">
	<h3>Chi tiết đơn hàng</h3>
	<div class="container-fluid">
	<table class="table table-hover table-inverse">
		<thead>
			<tr>
				
			</tr>
		</thead>
		<tbody>

				<tr>
					<th>ID Đơn hàng</th>
					<td><?php echo $ODERPHONE['Order_id']; ?></td>
				<tr>
				<tr>
					<th>Tên khách hàng</th>
					<td>
						<?php
							foreach ($CUSTOMER as $key => $value) {
								if ($ODERPHONE['Customer_id'] ==$value['Customer_id']) {
									echo $value['Customer_name'];
								}	
							}
							
						?>
					 	
					 </td>
				<tr>
				<tr>
					<th>Số điện thoại</th>
					<td>
						<?php
							foreach ($CUSTOMER as $key => $value) {
								if ($ODERPHONE['Customer_id'] ==$value['Customer_id']) {
									echo $value['Customer_phone'];
								}	
							}
							
						?></td>
				<tr>
				<tr>
					<th>Sản phẩm</th>
					<td><?php 
						foreach ($PHONE as $key => $value1) {
								if ($ODERDETAIL['Phone_id'] == $value1['Phone_id']) {
									//echo $value1['Name'];
									echo $ODERDETAIL['Order_id'];
								}	
							}
					 ?></td>
				<tr>
				<tr>
					<th>Số lượng mua</th>
					<td>
						<?php
							echo $ODERDETAIL['Sale_quantity'];
						?>
					</td>
				</tr>
				<tr>
					<th>Giá sản phẩm</th>
					<td><?php echo $ODERDETAIL['Price']; ?></td>
				<tr>
				<tr>
					<th>Ngày đặt</th>
					<td><?php echo $ODERPHONE['Create_date']; ?></td>
				<tr>
				<tr>
					<th>Nhân viên giao hàng giao</th>
					<td>
						<?php 
							foreach ($deli as $key => $value2) {
								if ($value2['Deliverer_id'] == $ODERPHONE['Deliverer_id']) {	
									echo $value2['Deliverer_name'];
								}
							}
						?>
					</td>
				<tr>
				<tr>
					<th>Địa chỉ giao</th>
					<td><?php echo $ODERPHONE['Delivery_addres']; ?></td>
				<tr>
				<tr>
					<th>Ghi chú</th>
					<td><?php echo $ODERPHONE['Note']; ?></td>
				<tr>
				<tr>
					<th>Tổng tiền</th>
					<td><?php echo $ODERPHONE['Total_price']; ?></td>
				<tr>
				<tr>
					<th>Tình trạng</th>
					<td>
						<?php
							foreach ($STATUS as $key => $value3) {
							  	if ($value3['Status_id'] == $ODERPHONE['Status_id']) {
							  		echo $value3['Status'];
							  	}
							  }  
						?>
					</td>
				<tr>
				
		</tbody>
	</table>
</div>
</div>