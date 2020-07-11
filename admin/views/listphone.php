<div class="container-fluid">
    <?php
        if (isset($_SESSION['NotiaddPhone'])) {
            echo "<div class='alert alert-info'>
            <a class='close' data-dismiss='alert'>&times;</a>
            <strong>Nhắc nhở!</strong> Thêm thành công.
          </div>";
            unset($_SESSION['NotiaddPhone']);
         }  

        if (isset($_SESSION['NotieditPhone'])) {
            echo "<div class='alert alert-info'>
            <a class='close' data-dismiss='alert'>&times;</a>
            <strong>Nhắc nhở!</strong> Sửa thành công.
          </div>";
            unset($_SESSION['NotieditPhone']);
        }

        if (isset($_SESSION['NotidelPhone'])) {
            echo "<div class='alert alert-info'>
            <a class='close' data-dismiss='alert'>&times;</a>
            <strong>Nhắc nhở!</strong> Xóa thành công.
          </div>";
            unset($_SESSION['NotidelPhone']);
        }

          
    ?>
    <h1>Danh sách điện thoại</h1><a href="index.php?method=addphone"><button class="btn btn-success" type="button">THÊM MỚI</button></a>
    
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên điện thọai</th>
                <th>Giá</th>
                <th>Màu</th>
                <th>Ram</th>
                <th>Hãng</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt = 0;
                foreach ($rs_phone as $key => $value) {
                $stt++;
            ?>  
                <tr>
                    <td><?php echo $stt ?></td>
                    <td><?php echo $value['Name']; ?></td>
                    <td><?php echo $value['Price']; ?></td>
                    <td>
                        <?php
                            foreach ($rs_Color as $key => $values) {
                               if ($values['Color_id'] == $value['Color_id']) {
                                   echo $values['Color_name'];
                               }
                            }
                        ?>
                        
                    </td>
                    <td>
                        <?php
                            foreach ($rs_Memory as $key => $valuess) {
                               if ($valuess['Memory_id'] == $value['Memory_id']) {
                                   echo $valuess['Memory'];
                               }
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            foreach ($rs_Firm as $key => $valuesss) {
                               if ($valuesss['Firm_id'] == $value['Firm_id']) {
                                   echo $valuesss['Firm_name'];
                               }
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            foreach ($detailPhone as $key => $vl) {
                                if ($vl['Phone_id'] == $value['Phone_id']) {
                                    echo $vl['Quatity'];
                                }
                            }
                        ?>
                            
                    </td>
                    <td>
                        
                        
                        <a href="index.php?method=editphone&id_phone=<?php echo $value['Phone_id'] ?>"><button class="btn btn-info" type="button"><i class="fa fa-edit"></i>SỬA</button></a>
                        <a onclick="return confirm('Bạn có muốn xóa hay không?')" href="index.php?method=del_phone&id_phone=<?php echo $value['Phone_id'] ?>">
                            <button type="button" class="btn btn-warning"><i class="fa fa-times"></i> Xóa</button>
                        </a>
                        <a href="index.php?method=detail_phone&id_phone=<?php echo $value['Phone_id'] ?>">
                            <button  type="button" class="btn btn-danger"><i class="fa fa-eye"></i>Chi tiết</button>
                        </a>
                        
                    </td>
                </tr>
            <?php
                }  
            ?>
            
        </tbody>
    </table>

</div>


