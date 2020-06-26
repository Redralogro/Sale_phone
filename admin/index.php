<?php 
session_start();

include_once './login/Login_processing_handle.php';
if(!empty($_SESSION['error_login']))
{
echo $_SESSION['error_login'];
}
unset($_SESSION['error_login']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập hệ thống</title>
    <link rel="stylesheet" href="login/CSS/login.css">
    <link rel="short-cut icon" href="./login/IMG/images.png" />

</head>

<body>
    <div class="container">
        <div class="container-main">
            <div class="main">
                <h2>ĐĂNG NHẬP</h2>


                <div class="layout-main">

                    <form method="post" action="index.php">
                        <input type="email" name="username" placeholder="Nhập Email ..." required="">
                        <input type="password" name="password" placeholder="Nhập mật khẩu..." required="">

                        <input type="submit" name="submit" value="ĐĂNG NHẬP NGAY">
                        <a href="#" onclick="func()">
                            <h4>Forget password?</h4>
                        </a>
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
        alert('Vui Lòng Liên Hệ Quản Trị Viên Để Lấy Lại Tài Khoản!!!!!');
    }
</script>
</body>


</html>