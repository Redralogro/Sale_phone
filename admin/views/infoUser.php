<div class="container-fluid">
	<?php 

	?>
	<div class="row">

		<div class="col-6">
			<h3>Thông tin tài khoản</h3>
			<table class="table table-hover table-inverse">
				<thead>
					
				</thead>
				<tbody>
					<tr>
						<th>Tên</th>
						<td><?php echo $rs['Name']; ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?php echo $rs['Email']; ?></td>
					</tr>
						<th>Số điện thoại</th>
						<td><?php echo $rs['number_phone']; ?></td>
					<tr>
						<th>Tài khoản</th>
						<td>
							<?php
								if ( $rs['status'] == 1) {
							?>
							admin
							<?php
								}else{
							?>
							Thường
							<?php
								}
							 
							?>
						 	
						 </td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-6">
			<h3>Ảnh</h3>
			<img style="width: 300px" src="public/img/user/<?php echo $rs['Image_user'] ?>" alt="">
		</div>
		
		
	</div>
	<!-- <div class="row">
		<div class="col-6">
			<button <?php if ($rs['status'] != 1) {
				echo 'style=display:none';
			} ?> class="btn btn-warning">Sửa thông tin tài khoản</button>
		</div>
		
	</div> -->
</div>