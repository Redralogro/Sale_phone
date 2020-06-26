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
   <!-- MDBootstrap Datatables  -->
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
   <link href="public/css/addons/datatables2.min.css" rel="stylesheet">

 
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

      
      
    </body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="public/js/ruang-admin.min.js"></script>
    <script src="public/vendor/chart.js/Chart.min.js"></script>
    <script src="public/js/demo/chart-area-demo.js"></script>  
    <script src="controller/controllers.js"></script>
    <script type="text/javascript" src="public/js/addons/datatables2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });


       
    </script>  
</html>