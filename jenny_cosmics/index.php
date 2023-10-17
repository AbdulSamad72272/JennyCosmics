<?php
include("connection.php");
include("header.php");
?>

        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/slide1.webp);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">eye products</h2>
                                    <a href="shop.php" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/slide2.webp);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">lip products</h2>
                                    <a href="shop.php" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/slide3.avif);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">face products</h2>
                                    <a href="shop.php" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Single Slide Start -->
                 <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/slide4.avif);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">jewellery</h2>
                                    <a href="shop.php" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->
        
        <!-- ****** Top Catagory Area Start ****** -->
        

        <div class="container-fluid offer pt-5">
    <?php
    $query = $pdo->query("select * from category");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    // Loop through the categories, 2 divs in a row
    for ($i = 0; $i < count($result); $i += 2) {
        ?>
        <div class="row">
            <?php
            // First category div
            $item = $result[$i];
            ?>
            <div class="col-md-6 pb-4">
                <a href="select_category.php?id=<?php echo $item['id'] ?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                    <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5 bg-img" style="background-image: url(../adminpanel/assets/images/<?php echo $item['image']?>);">
                        <div class="position-relative" style="z-index: 1;">
                            <h5 class="text-uppercase  mb-3 text-danger">20% off the all order</h5>
                            <h1 class="mb-4 font-weight-semi-bold text-danger"><?php echo $item['category']?></h1>
                            <a href="select_category.php?id=<?php echo $item['id'] ?>" class="btn btn-outline-danger py-md-2 px-md-3">Shop Now</a>
                        </div>
                    </div>
                </a>
            </div>

            <?php
            // Second category div, if it exists
            if ($i + 1 < count($result)) {
                $item = $result[$i + 1];
                ?>
                <div class="col-md-6 ">
                    <a href="select_category.php?id=<?php echo $item['id'] ?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5 bg-img" style="background-image: url(../adminpanel/assets/images/<?php echo $item['image']?>);">
                            <div class="position-relative" style="z-index: 1;">
                                <h5 class="text-uppercase mb-3 text-danger">20% off the all order</h5>
                                <h1 class="mb-4 font-weight-semi-bold text-danger"><?php echo $item['category']?></h1>
                                <a href="select_category.php?id=<?php echo $item['id'] ?>" class="btn btn-outline-danger py-md-2 px-md-3">Shop Now</a>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    <?php
    }
    ?>
</div>


           
                
        <!-- ****** Top Catagory Area End ****** -->

        
        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>New Arrivals</h2>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="container">
                <div class="row karl-new-arrivals">
                <?php
                       $query=$pdo->query("select * from products order by id desc limit 10 ");
                       $result=$query->fetchAll(PDO::FETCH_ASSOC);
                       foreach($result as $item){
                       ?>
                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <a href="product-details.php?id=<?php echo $item['id']?>">
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
                           </a>
                        </div>
                    </div>
                   <?php
                       }
                     ?>
                    
                </div>
            </div>
        </section>
        <!-- ****** New Arrivals Area End ****** -->

        <!-- ****** Offer Area Start ****** -->
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(img/bg-img/bg-5.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2>White t-shirt <span class="karl-level">Hot</span></h2>
                            <p>* Free shipping until 25 Dec 2017</p>
                            <div class="offer-product-price">
                                <h3><span class="regular-price">$25.90</span> $15.90</h3>
                            </div>
                            <a href="#" class="btn karl-btn mt-30">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Offer Area End ****** -->

        <!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Michelle Williams</p>
                                        <span>Client, Los Angeles</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Michelle Williams</p>
                                        <span>Client, Los Angeles</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Michelle Williams</p>
                                        <span>Client, Los Angeles</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ****** Popular Brands Area End ****** -->

        <?php
include("footer.php");
?>