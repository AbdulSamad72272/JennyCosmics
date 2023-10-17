<?php
include("header.php");
if(!isset($_SESSION['id'])){
    echo "<script>location.assign('signin.php');</script>";
}
    ?>

        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5>Billing Address</h5>
                                <p>Enter your cupone code</p>
                            </div>

                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="first_name">Name <span>*</span></label>
                                        <input type="text" name="name" class="form-control" id="first_name" value="" required>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email  <span>*</span></label>
                                        <input type="email" name="email" class="form-control" id="email_address" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Work Phone No <span>*</span></label>
                                        <input type="number" name="phone_num" class="form-control">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="city">Cell No. <span>*</span></label>
                                        <input type="number" name="cell" class="form-control" id="city" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="city">Date Of  Birth  <span>*</span></label>
                                        <input type="date" name="date" class="form-control" id="city" value="">
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <label for="street_address">Address <span>*</span></label>
                                        <input type="text" name="address" class="form-control mb-3" id="street_address" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="City">City <span>*</span></label>
                                        <input type="text" name="city" class="form-control mb-3" id="street_address" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="Category">Category <span>*</span></label>
                                        <input type="text" name="category" class="form-control" id="city" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="Remarks">Remarks <span>*</span></label>
                                        <input type="text" name="remarks" class="form-control" id="city" value="">
                                    </div>
                                    <button type="submit" class="btn karl-checkout-btn" name="checkout">place order | COD</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="">
                        <div class="cart-table clearfix">
                        <table class="table">
								<tr class="table_head">
									<th class="column-1">PRODUCTS</th>
									<th class="column-2">NAME</th>
									<th class="column-3">PRICE</th>
									<th class="column-4">QTY</th>
									<th class="column-5">TOTAL</th>
									
								</tr>
								<?php
                               
								if(isset($_SESSION['cart'])){
                                    $sub_total=0;
									foreach($_SESSION['cart'] as $value){
                                
								?>

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img style="width:80px" src="../adminpanel/assets/images/<?php echo $value['image']?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $value['name']?></td>
									<td class="column-3"><?php echo $value['price']?></td>
									<td class="column-4">
									<?php echo $value['qty']?>
									</td>
									<td class="column-5"><?php echo $value['price'] * $value['qty'];
                                    
                                      $total= $value['price'] * $value['qty'];
                                      $sub_total += $total    ?></td>
									
                                     
								</tr>
                                <?php	
								}
							}
								?> 
								
							</table>
                        </div>
                        <div class="row">
                  
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p>Final info</p>
                            </div>
                          
                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> <span><?php echo $sub_total;?></span></li>
                                <li><span>Shipping</span> <span>Free</span></li>
                                <li><span><strong>Total</strong></span> <span><strong><?php echo $sub_total;?></strong></span></li>
                            </ul>
                        </div>
                    
                </div>
                            
                    </div>
                </div>
								
							</table>

                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->

        <?php
include("footer.php");
                        
?>