<section>
        <div class="container">
                <div class="heading">
                        <br>
                        <br>
                        <h2>Step 2: Choose from Menu</h2>
                </div>

                <div class="row">
                        <div class="col-sm-12">
                                <ul class="selecton brdr-b-primary mb-70">
                                        <li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
                                        <li><a href="#" data-select="pizza"><b>PIZZA</b></a></li>
                                        <li><a href="#" data-select="pasta"><b>PASTA</b></a></li>
                                        <li><a href="#" data-select="salads"><b>SALADS</b></a></li>
                                        <li><a href="#" data-select="deserts"><b>DESSERTS</b></a></li>
                                </ul>
                        </div><!--col-sm-12-->
                </div><!--row-->
                <?php
        
                $conn = mysqli_connect("localhost","root","","pizzacentral");
                if(!$conn){
                        die('Not connected to Database'.mysqli_connect_error());
                }else{

                      //  $rs = mysqli_query($conn,"SELECT * FROM product_profile LEFT JOIN order_form order_form.prod_id = product_profile.prod_id");
                      //  if(mysqli_num_rows($rs) > 0){
                        
                       // while($row = mysqli_fetch_array($rs)){
                               
                        ?>

                <div class="row">
                        <div class="col-md-6 food-menu pizza">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="<?php echo base_url('assets/images/menu-1-120x120.jpg')?>" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Margherita</b>
                                                        <input type="button" class="color-primary float-right" name="" value="₱299.00" onclick="alert('Added to cart');"></h5>
                                                <p class="pr-70">Made with San Marzano tomatoes, mozzarella fior di latte, fresh basil, salt and extra-virgin olive oil.</p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                        <?php
                           //     $row = mysqli_fetch_array($price);
                        ?>
                        <div class="col-md-6 food-menu pizza">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="<?php echo base_url('assets/images/menu-1-120x120.jpg')?>" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Hawaiian</b>
                                                        <input type="button" class="color-primary float-right" name="" value="₱350.00" onclick="alert('Added to cart');"></h5>
                                                <p class="pr-70">Topped with tomato sauce, cheese, pineapple, and back bacon or ham. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                </div>

                        <?php
        }
//}
//}

        ?>
        </div><!-- container -->
</section>