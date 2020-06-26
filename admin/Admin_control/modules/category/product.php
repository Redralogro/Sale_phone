<?php
$phone = $db->getdata_where("phones,firm,color,memory", "phones.Color_id=color.Color_id AND phones.Firm_id=firm.Firm_id AND phones.Memory_id=memory.Memory_id");
//$phone = $db->getAllData("phones");
?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh mục sản phẩm
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
                <li>
                    <i class="fa fa-book"></i>Danh mục
                </li>
            </ol>
        </div>
    </div>
    <div class="row" id="content">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tên Điện thoại</th>
                        <th>Hãng điện thoại</th>
                        <th>Màu sắc</th>
                        <th>Giá tiền</th>
                        <th>Bộ nhớ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($phone as $row) {?>
                    <tr>
                        <td>
                            <?php echo $row['Name']; ?>
                        </td>
                        <td>
                            <?php echo $row['Firm_name']; ?>
                        </td>
                        <td>
                            <?php echo $row['Color_name']; ?>
                        </td>
                        <td>
                            <?php echo $row['Price']; ?>
                        </td>
                        <td>
                            <?php echo $row['Memory']; ?>
                        </td>
                        <td>
                            <a href="index.php?page=details_product&id=<?php echo $row['Phone_id'];?>"><button class=" btn btn-primary"><i
                                        class="fa fa-eye"></i> Chi
                                    tiết</button></a>
                            <a href="index.php?page=edit_product&id=<?php echo $row['Phone_id'];?>"><button class="btn btn-info"><i
                                        class="fa fa-edit"></i> Sửa</button></a>
                            <!-- <a href="index.php?page=delete_product&id=<?php echo $row['Phone_id'];?>"><button class="btn btn-danger"><i class="fa fa-remove"></i> Xóa</button></a> -->
                            <a href="autoloads/CRUD_method.php?method=delete&id=<?php echo $row['Phone_id'];?>"><button class="btn btn-danger"><i class="fa fa-remove"></i> Xóa</button></a>
                        </td>
                    </tr>
                    <?php
}
?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="pull-left">
            <a href="index.php?page=add_product" class="btn btn-primary">Thêm mới</a>
        </div>
        <div class="pull-right">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

</div>