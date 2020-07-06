<?php 
ob_start();
session_start();
include_once './config/Connect.php';
include_once './model/database.php';
include_once './/Function/function.php';

$db= new Database();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
if (isset($_SESSION['noti_cart'])) {
   if($_SESSION['noti_cart']==1)
   {
       echo "<script> alert  ('Đặt hàng thành công')</script>";
   }
   else if($_SESSION['noti_cart']==0)
   {
    echo "<script> alert  ('Đặt hàng Thất bại')</script>"; 
   }

}
else
{}
unset($_SESSION['noti_cart']);

?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DLH Shop</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./public/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/css/owl.carousel.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <?php include_once './Layout/header.php' ?>
    <!-- End header area -->

                  
                     <?php 
                    // switch ($page) {
                    //     case 'home':
                    //         include_once './views/home.php';
                    //         break;
                    //     case 'shop':
                    //         include_once './views/shop.php';
                    //         break;

                    //     case 'single-product':
                    //         include_once './views/single-product.php';
                    //         break;
                    //     case 'cart':
                    //         include_once './views/cart.php';
                    //         break;
                    //     case 'checkout':
                    //         include_once './views/checkout.php';
                    //         break;
                    //     default:
                    //         # code...
                    //         break;
                    // }

                    if (file_exists('views/'.$page.'.php')) {
                        include_once 'views/'.$page.'.php';
                     }else{
                        header("Location: ./404/index.php");
                     }
                    ?>

    <?php 
   include_once './Layout/footer.php';
   ?>
    <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="./public/js/jquery-1.10.2.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="./public/js/jquery.easing.1.3.min.js"></script>
    <!-- Slider -->
    <script type="text/javascript" src="./public/js/bxslider.min.js"></script>
    <script type="text/javascript" src="./public/js/script.slider.js"></script>
        <!-- Main Script -->
        <script src="./public/js/main.js"></script>
    <script src="./public/js/Jav.js"></script>
</body>

</html>