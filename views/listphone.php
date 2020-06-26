<div class="row">
                                    <?php   
                                            foreach ($result as $row)
                                            {
                                                
                                            ?>  
                                <div class="col-md-4 col-sm-6 ">
                                    <div class="single-shop-product" style="text-align: center">
                                        <div class="product-upper" style="text-align: center;">
                                            <a href="index.php?page=single-product&id=<?php echo  $row['Phone_id']?>"><img style="height:300px;" src="admin/public/img/phone/<?php echo  $row['Image'] ?>" alt="Điện thoại đẹp"></a>
                                        </div>
                                        <h2 style="text-align: center;white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"><a href="index.php?page=single-product&id=<?php echo  $row['Phone_id']?>"><?php echo $row['Name'] ?></a></h2>

                                        <div class="product-carousel-price" style="text-align: center;">
                    
                                            <ins><?php echo number_format($row['Price'])  ?> VNĐ</ins> <del>
                                                <?php
                                             
                                            ?></del>
                                        </div>  
                                        
                                        <div class="product-option-shop" style="text-align: center;">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="./views/Cart_method/Order.php?id_item=<?php echo $row['Phone_id']?>">Add to cart</a>
                                        </div>                       
                                    </div>
                                </div>


                               <?php }?>
                        </div>