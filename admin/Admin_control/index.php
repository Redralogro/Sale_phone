<?php

include_once __DIR__ . './autoloads/autoload.php';

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    $_SESSION['error_login']="Đừng có mà vớ vẩn";
    // unset($_SESSION['error_login']);
}
?>
<?php
include_once './layouts/header.php';
?>

<div id="page-wrapper">

    <?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'admin';
}

switch ($page) {
    case 'product':
        include_once './modules/category/product.php';
        break;
    case 'admin':
        include_once './modules/category/admin.php';
        break;

    case 'add_product':
        include_once './modules/category/add_product.php';
        break;
    case 'edit_product':
        include_once './modules/category/edit_product.php';
        break;
    case 'delete_product':
        include_once './modules/category/delete_product.php';
        break;
    default:
        # code...
        break;
}

?>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../public/js/jquery-1.12.4.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<script src="../public/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../public/js/plugins/morris/raphael.min.js"></script>
<script src="../public/js/plugins/morris/morris.min.js"></script>
<script src="../public/js/plugins/morris/morris-data.js"></script>

</body>

</html>