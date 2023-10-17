<?php
include("connection.php");
include("header.php");
?>


<section class="shop_grid_area section_padding_100">
            <div class="container">
            <div class="section_heading text-center">
                            <h2>jewellery Products</h2>
                        </div>
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">
                        <?php
                        $query=$pdo->query("select *from products where c_id=4");
                        $result=$query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($result as $item){
                            ?>
                        
                       
                                <!-- Single gallery Item -->
                                <div class="col-4 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                    <a href="product-details.php?id=<?php echo $item['id']?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        <img src="../adminpanel/assets/images/<?php echo $item['image']?>" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price"><?php echo $item['price']?></h4>
                                        <p><?php echo $item['products']?></p>
                                        </a>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div>
                                <?php
                       } 
                                ?>
                            </div>
                        </div>


                        <?php
                        include("footer.php")
                        ?>