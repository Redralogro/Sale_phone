
<div class="container-fluid">
	<?php
		if (isset($_SESSION['NotiaddFirm'])) {
		  	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Thêm thành công.
		  </div>";
		  	unset($_SESSION['NotiaddFirm']);
		 }  

		if (isset($_SESSION['NotieditFirm'])) {
		 	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Sửa thành công.
		  </div>";
		  	unset($_SESSION['NotieditFirm']);
		}

		if (isset($_SESSION['NotidelFirm'])) {
		 	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Xóa thành công.
		  </div>";
		  	unset($_SESSION['NotidelFirm']);
		}

		if (isset($_SESSION['NotidelFirm2'])) {
		 	echo "<div class='alert alert-info'>
		  	<a class='close' data-dismiss='alert'>&times;</a>
		  	<strong>Nhắc nhở!</strong> Xóa thất bại .
		  </div>";
		  	unset($_SESSION['NotidelFirm2']);
		}

		

		  
	?>
	<h3 >Danh Sách Hãng điện thoại</h3>
	<table class="table table-sm table-inverse table-hover">
		<thead>
			<tr>
				<th>TÊN HÃNG</th>
				<th>LOGO</th>
				<th>HÀNH ĐỘNG</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($rs_Firm as $key => $value) {
			?>
				<tr>
					<td><?php echo $value['Firm_name']; ?></td>
					<td ><img style="width: 200px"  src="public/img/logo/<?php echo  $value['Logo'] ?>"></td>
					<td>
	                        
	                        <a href="index.php?method=editfirm&id_firm=<?php echo $value['Firm_id']?>">
	                        	<button type="button" class="btn alert-danger">Sửa</button>
	                        </a>
	                        <a onclick="return confirm('Bạn có muốn xóa hay không?')" href="index.php?method=del_firm&id_firm=<?php echo $value['Firm_id']?>">
	                            <button type="button" class="btn btn-warning">Xóa</button>
	                        </a>
	                  
	                        <a  href="index.php?method=phone_firm&id_firm=<?php echo $value['Firm_id']?>">
	                            <button type="button" class="btn btn-info">Xem điện thoại</button>
	                        </a>
	                    </td>
				</tr>
			<?php
				  }  
			?>
			
		</tbody>
	</table>
	<a href="index.php?method=addfirm">
		<button type="button" class="btn alert-success">Thêm</button>
	</a>
	<a href="index.php">
		<button type="button" class="btn alert-success">Quay lại trang chủ</button>
	</a>
</div>