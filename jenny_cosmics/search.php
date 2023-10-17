<?php include('header.php')?>

<section class="bg0 p-t-23 p-b-140 ">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 mt-5 pt-5 cl5 mt-5">
					Search Result 
				</h3>
			</div>
            
            
            <div class="row justify-content-end">
  <div class="col-md-6  align-items-end">
    <form class="d-flex" action="#" method="post">
      <input type="text" class="form-control w-100 ms-5 mb-5  " name="search" placeholder="Search...">
      <button class="btn btn-danger btn-small  mb-5 ms-2" type="submit" name="search_pro"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </div>


<div class="container">
    <div class="row karl-new-arrivals">
        <?php 
        if(isset($_POST['search_pro'])){
            $search = $_POST['search'];
            $query = $pdo->prepare("SELECT * FROM products WHERE products LIKE :search");
            $query->bindValue(":search", '%' . $search . '%');
            $query->execute(); 
            if($query->rowCount() > 0){
                while($row = $query->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <a href="product-details.php?id=<?php echo $row['id']?>">
                            <div class="product-img">
                                <img src="../adminpanel/assets/images/<?php echo $row['image']?>" alt="">
                                <div class="product-quicview">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price"><?php echo $row['price']?></h4>
                                <p><?php echo $row['products']?></p>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<script>alert('No matching data found')</script>";
            }
        }
        ?>
    </div>
</div>

<?php include('footer.php')?>
