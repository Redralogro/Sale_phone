
<div class="container-fluid">
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
					<td><?php echo $value['logo']; ?></td>
					<td>
	                        
	                        <a href="index.php?method=editfirm&id_firm=<?php echo $value['Firm_id']?>">
	                        	<button type="button" class="btn alert-danger">Sửa</button>
	                        </a>
	                        <a onclick="return confirm('Bạn có muốn xóa hay không?')" href="index.php?method=del_firm&id_firm=<?php echo $value['Firm_id']?>">
	                            <button type="button" class="btn btn-warning">Xóa</button>
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