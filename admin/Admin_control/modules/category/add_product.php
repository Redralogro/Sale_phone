<?php
$product_color = $db->getAllData("color");
$product_firm = $db->getAllData("firm");
$product_memory = $db->getAllData("memory");
?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm sản phẩm  
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-table"></i> Danh mục
            </li>
            <li>
                <i class="fa fa-plus-circle"></i>Thêm sản phẩm
            </li>
        </ol>
    </div>
</div>
<div class="row" id="content">
    
    <form action="" method="POST" class="form-horizontal" role="form">
    <legend>Form title</legend>
    
    <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phoneName">Tên điện thoại</label>
                    <input type="text" class="form-control" id="phonename">
                </div>
                <div class="form-group col-md-6">
                    <label for="phonefirm">Hãng điện thoại</label>
                    <select id="phonefirm" class="form-control">
                        <option selected>Chọn hãng</option>
                        <?php
foreach ($product_firm as $row) {
    ?>

                        <option><?php echo $row["Firm_name"] ?></option>
                        <?php }?>

                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Bộ nhớ</label>
                    <select id="inputState" class="form-control">
                        <option selected>Chọn bộ nhớ</option>
                        <?php
foreach ($product_memory as $row) {
    ?>

                        <option><?php echo $row["Memory"] ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Màu điện thoại</label>
                    <select id="inputState" class="form-control">
                        <option selected>Chọn màu</option>
                        <?php
foreach ($product_color as $row) {
    ?>

                        <option><?php echo $row["Color_name"] ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group col-md-10">
                    <label for="inputZip">Mô tả</label>
                    <textarea ></textarea>
                </div>
            </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Giá tiền</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi </button>
    </form>
    

    
    

</div>

</div>