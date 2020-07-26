<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Doanh thu tháng <?php echo date('m'); ?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($countPrice['0']) ?> VND</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span>Tổng số tiền đã bán</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Đơn hàng trong tháng <?php echo date('m'); ?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">  <?php echo $countOrder['0']; ?> </div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      
                        <span>Tổng số đơn đã bán</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Khách hàng </div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $countCustomer['0']; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span>Tổng số khách hàng </span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-6">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Đơn hàng</h6>
                  <a class="m-0 float-right btn btn-danger btn-sm" href="index.php?method=orderPhone">Xem chi tiết <i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Order ID</th>
                        <th>Khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($rs as $key => $value) {
                      ?>
                        <tr>
                          <td><a href="#"><?php echo $value['Order_id'] ?></a></td>
                          <td><?php
                            foreach ($CUSTOMER as $key => $value1) {
                              if ($value1['Customer_id'] == $value['Customer_id'] ) {
                                echo $value1['Customer_name'];
                              }
                            }
                           ?></td>
                          <td>
                            
                            <?php echo $value['Total_price'] ?>
                              
                            </td>
                          <td><span class="badge badge-success"><?php
                                foreach ($STATUS as $key => $value2) {
                                  if ($value2['Status_id'] == $value['Status_id'] ) {
                                    echo $value2['Status'];
                                  }
                                }
                            ?></span></td>
                          <td><a href="index.php?method=detail_order&id_Order=<?php echo $value['Order_id'] ?>" class="btn btn-sm btn-primary">Chi tiết</a></td>
                        </tr>
                      <?php
                          }  
                      ?>
                      
                      
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <!-- Message From Customer-->
            <div class="col-xl-4 col-lg-5 ">
              
            </div>
          </div>
          <!--Row-->


        </div>