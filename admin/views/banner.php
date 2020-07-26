<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>Quản lý Banner</h3>
			
				<?php
				if (isset($_SESSION['notiBanner'])) {
					echo "<div class='alert alert-info'>
				  	<a class='close' data-dismiss='alert'>&times;</a>
				  	<strong>Nhắc nhở!</strong> Thêm thành công.
				  </div>";
				  unset($_SESSION['notiBanner']);
				}

				if (isset($_SESSION["notidel"])) {
					echo "<div class='alert alert-info'>
					  	<a class='close' data-dismiss='alert'>&times;</a>
					  	<strong>Nhắc nhở!</strong> Xóa thành công.
					  </div>";
					  unset($_SESSION['notidel']);
				}
			?>
			
			<table class="table table-hover  table-responsive" id="datatable">
				<thead>
					<tr>
						<th >ID BANNER</th>
						<th >BANNER</th>
						<th >Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($showbanner as $key => $value) {
					?>
						<tr>
							<td ><?php echo  $value['banner_id']; ?></td>
							<td >
								<img style="width: 100%"  src="public/img/banner/<?php echo  $value['image_banner'] ?>">
							</td>
							
							<td >
								<a onclick="return confirm('Bạn có thực sự muốn xóa không?')" href="index.php?method=delBanner&id_banner=<?php echo $value['banner_id'] ?>">
									<button class="btn btn-warning">Xóa</button>
								</a>
								
							</td>
						</tr>
					<?php
						  }  
					?>
					
				</tbody>
			</table>	
	
			
			<form method="POST" enctype="multipart/form-data">
				<fieldset class="form-group">
					<label for="logo"><h2>Thêm Banner</h2></label>
					<input type="file" class="form-control-file" name="logo" id="logo">
				</fieldset>
				<button type="submit" name="OK" class="btn btn-primary">Thêm</button>
			</form>
		</div>
	</div>
</div>