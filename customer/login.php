<?php 
session_start();

include_once './login/Login_processing_handle.php';
// if(!empty($_SESSION['error_customer']))
// {
// echo $_SESSION['error_customer'];
// }
// unset($_SESSION['error_customer']);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập hệ thống</title>
    <link rel="stylesheet" href="login/CSS/login.css">
    <link rel="short-cut icon" href="./login/IMG/images.png" />
    <!-- <link href="../admin/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../admin/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->

</head>

<body>

    <div class="container">
        <div class="container-main">

            <div class="main">
                            

                <?php if (isset($_SESSION['notilogin1'])) {
    echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác!')</script>";
    unset($_SESSION['notilogin1']);
} ?>
                <div class="layout-main" style="bottom: 80px;">
                    <h2>ĐĂNG NHẬP</h2>
                    <form method="post" action="login.php">
                        <!-- <h5>Đăng nhập bằng số điện thoại và mật khẩu được cung cấp qua mail</h5> -->
                        <input type="text" name="phoneNumber" placeholder="Nhập số điện thoại ..." required="">
                        <input type="password" name="password" placeholder="Nhập mật khẩu được cung cấp..." required="">

                        <input type="submit" name="submit" value="ĐĂNG NHẬP NGAY">
                        
                    </form>
                </div>

            </div>
            <!-- <div class="footer">
                <p>Form login | Design by <a href="https://www.facebook.com/groups/551170952371766">Team 5</a></p>
            </div> -->
        </div>
    </div>
<script>
    function func() 
    {
        alert('Vui Lòng Liên Hệ Quản Trị Viên Để Kiểm tra thông tin!!!!!');
    }
</script>
</body>


</html>