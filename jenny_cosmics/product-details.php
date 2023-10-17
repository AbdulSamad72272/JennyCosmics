<?php
include("connection.php");
include("header.php");
?>

        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
        <div class="breadcumb_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Dresses</a></li>
                            <li class="breadcrumb-item active">Long Dress</li>
                        </ol>
                        <!-- btn -->
                        <a href="#" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Category</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

	<!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $query = $pdo->prepare("SELECT * FROM products WHERE id=:id");
                $query->bindParam('id', $id);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_ASSOC);
            
            ?>

            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="../adminpanel/assets/images/<?php echo $result['image']; ?>">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="../adminpanel/assets/images/<?php echo $result['image']; ?>" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../adminpanel/assets/images/<?php echo $result['image']; ?>">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>

                        
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        <?php echo $result['products']; ?>
                    </h4>

                    <span class="mtext-106 cl2">
                        <?php echo $result['price']; ?>
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                        Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                    </p>
                </div>

                            <!-- Add to Cart Form -->
                            <form action="cart.php" class="cart clearfix mb-50 d-flex" method="post">
                                    <input type="hidden" name="id" value="<?php echo $result['id']?>">
									<input type="hidden" name="name" value="<?php echo $result['products']?>">
									<input type="hidden" name="price" value="<?php echo $result['price']?>">
									<input type="hidden" name="image" value="<?php echo $result['image']?>">
                                <div class="quantity">

                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <br>
                                <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block ">Add to cart</button>
                            </form>
                            <?php
			}  
	   ?>
                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

       

        <section class="you_may_like_area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="you_make_like_slider owl-carousel">
                        <?php
                       $query=$pdo->query("select * from products");
                       $result=$query->fetchAll(PDO::FETCH_ASSOC);
                       foreach($result as $item){
                       ?>
                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <a href="product-details.php?id=<?php echo $item['id']?>" class=" trans-04 js-name-b2 p-b-6">
                                <div class="product-img">
                                    <img src="../adminpanel/assets/images/<?php echo $item['image']?>" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price"><?php echo $item['price']?></h4>
                                    <p><?php echo $item['products']?></p>
                                    <!-- Add to Cart -->
                                    </a>
                                </div>
                            </div>
                      <?php
                       }
                      ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
include("footer.php");
?>