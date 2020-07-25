<?php

  session_start();
  ob_start();
  if (!isset($_SESSION['username'])) {
      header('Location: ./login.php');
  }

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>ADMIN</title>
  <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  
  <link href="public/css/ruang-admin.min.css" rel="stylesheet">
  <script src="ckeditor/ckeditor.js"></script>
  <script src="ckfinder/ckfinder.js"></script>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include_once 'dislay/navbar.php'; ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include_once 'dislay/topbar.php'; ?>
        <!-- Topbar -->


        <!-- Container Fluid-->
        <?php
          if (isset($_GET['page'])) {
              $page = $_GET['page'];
          }else{
            $page = 'phone';
          }

          switch ($page) {
            case 'phone':
              include_once 'controller/phone_c.php';
              $phone = new phone_c();
              $phone->phone();
            break;
                
            default:
                  
            break;
          }
        ?>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php include_once 'dislay/footer.php'; ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="public/vendor/jquery/jquery.min.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="public/js/ruang-admin.min.js"></script>
  <script src="public/vendor/chart.js/Chart.min.js"></script>
  <script src="public/js/demo/chart-area-demo.js"></script>  
  <script src="controller/controller.js"></script>  

</body>

</html>