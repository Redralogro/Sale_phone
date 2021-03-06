 <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
  <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-search fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
    aria-labelledby="searchDropdown">
    <form class="navbar-search" method="GET">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-1 small" placeholder="Nhập tên điện thoại bạn muốn tìm kiếm"
        aria-label="Search" aria-describedby="basic-addon2" name="tukhoa" style="border-color: #3f51b5;">
        <div class="input-group-append">
          
          <input class="btn btn-primary" type="submit" name="method"  value="Search">
          
          
          
        </div>
      </div>
    </form>
  </div>
</li>



<div class="topbar-divider d-none d-sm-block"></div>
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">
  <img class="img-profile rounded-circle" src="./public/img/boy.png" style="max-width: 60px">
  <span class="ml-2 d-none d-lg-inline text-white small"><?php echo $_SESSION['user'] ?></span>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
  <a class="dropdown-item" href="index.php?method=infoUser&id_User=<?php echo $_SESSION['user_id'] ?>">
    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
    Thông tin
  </a>
  <a class="dropdown-item" href="index.php?method=User" <?php if($_SESSION['status1']!=1){
    echo 'style="display: none"';
  } ?> >
  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
  Quản lý tài khoản
</a>

<a  class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  Đăng xuất
</a>

</div>
</li>
</ul>
</nav>