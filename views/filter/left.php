<div class="col-md-2" >

            <ul class="list-group">
              <li class="list-group-item"><b>Hãng</b></li>
              <?php
                foreach ($getfirm as $key => $value) {
              ?>
                <li class="list-group-item">
                    <a href="index.php?page=phones&active=firm&id=<?php echo $value['Firm_id']; ?>"><?php echo $value['Firm_name']; ?></a>
                </li>
              <?php
                  }  
              ?>
              
        </ul>

        <ul class="list-group">
              <li class="list-group-item"><b>Giá tiền</b></li>
              
            
            <li class="list-group-item">
                <a href="index.php?page=phones&active=price&price=4000000">Dưới 4 triệu</a>
            </li>
            <li class="list-group-item">
                <a href="index.php?page=phones&active=price&price=6000000">Dưới 6 triệu</a>
            </li>
            <li class="list-group-item">
                <a href="index.php?page=phones&active=price&price=8000000">Dưới 8 triệu</a>
            </li>
            <li class="list-group-item">
                <a href="index.php?page=phones&active=price&price=10000000">Dưới 10 triệu</a>
            </li>
            <li class="list-group-item">
                <a href="index.php?page=phones&active=price&price=20000000">Dưới 20 triệu</a>
            </li>
            <li class="list-group-item">
                <a href="index.php?page=phones&active=price&price=30000000">Dưới 30 triệu</a>
            </li>
        </ul>
    </div>