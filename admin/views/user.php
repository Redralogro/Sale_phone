<div class="container-fluid">
	<div class="row">
		<?php
			if (isset($_SESSION['error_phone'])) {
	            echo "<div class='alert alert-info'>
	            <a class='close' data-dismiss='alert'>&times;</a>
	            <strong>Nhắc nhở!</strong> Số điện thoại đã tồn tại hoặc không đúng định dạng.
	          </div>";
	            unset($_SESSION['error_phone']);
			}  
			if (isset($_SESSION['NotiAddUser'])) {
				echo "<div class='alert alert-info'>
				<a class='close' data-dismiss='alert'>&times;</a>
				<strong>Nhắc nhở!</strong> Thêm Thành công.
			</div>";
				unset($_SESSION['NotiAddUser']);
		   } 
				if (isset($_SESSION['NotiUser'])) {
					echo "<div class='alert alert-danger'>
					<a class='close' data-dismiss='alert'>&times;</a>
					<strong>Đã Xóa Thành Viên !!!</strong>.
				</div>";
					unset($_SESSION['NotiUser']);
			} 
			if (isset($_SESSION['NotiEditUser'])) {
				echo "<div class='alert alert-success'>
				<a class='close' data-dismiss='alert'>&times;</a>
				<strong>Sửa thành viên thành công </strong>.
			</div>";
				unset($_SESSION['NotiEditUser']);
		} 
			?>
		<div class="col-12">
			<h3>Quản lý tài khoản</h3><a href="index.php?method=addUser"> <button class="btn btn-success">Thêm tài khoản</button> </a>
			<table class="table table-hover table-inverse">
				<thead>
					<tr>
						<th>User_id</th>
						<th>Tên</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Loại tài khoản</th>
						<th>Ảnh</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($rs as $key => $value) {
					?>
						<tr>
							<td><?php echo $value['User_id'];?></td>
							<td><?php echo $value['Name']; ?></td>
							<td><?php echo $value['Email']; ?></td>
							<td><?php echo $value['number_phone']; ?></td>
							<td>
								<?php
									if ( $value['status'] == 1) {
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
							
							<td><img style="width: 100px" src="public/img/user/<?php echo $value['Image_user'] ?>" alt=""></td>
							<td>
								<a href="index.php?method=editUser&id_user=<?php echo $value['User_id'] ?>"><button class="btn btn-info" type="button"><i class="fa fa-edit"></i>SỬA</button></a>
		                        <a onclick="return confirm('Bạn có muốn xóa hay không?')" href="index.php?method=deltuser&id_user=<?php echo $value['User_id']  ?>">
		                            <button type="button" class="btn btn-warning">Xóa</button>
		                        </a>
							</td>
						</tr>
					<?php
						  }  
					?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>