<?php

include("header.php");


?>

        <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">
                        <table class="table">
								<tr class="table_head">
									<th class="column-1">PRODUCTS</th>
									<th class="column-2">NAME</th>
									<th class="column-3">PRICE</th>
									<th class="column-4">QTY</th>
									<th class="column-5">TOTAL</th>
									<th class="column-5">action</th>
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
									<td class="column-3"><?php echo $value['price']?> <input type="hidden" class="iprice" value="<?php echo $value['price']?>"></td>
									<td class="column-4">
        <div class="quantity">
            <span class="qty-minus" onclick="updateQuantity(this, <?php echo $value['price'] ?>, '<?php echo $value['id'] ?>', 'minus');"><i class="fa fa-minus" aria-hidden="true"></i></span>
            <input type="number" class="qty-text" id="qty-<?php echo $value['id'] ?>" step="1" min="1" max="12" name="quantity" value="<?php echo $value['qty'] ?>">
            <span class="qty-plus" onclick="updateQuantity(this, <?php echo $value['price'] ?>, '<?php echo $value['id'] ?>', 'plus');"><i class="fa fa-plus" aria-hidden="true"></i></span>
        </div>
    </td>
    <td class="column-5" id="total-<?php echo $value['id'] ?>"><?php echo $value['price'] * $value['qty'];
									
                                    
                                      $total= $value['price'] * $value['qty'];
                                      $sub_total += $total    ?></td>
									<td class="column-5">
										<a class="btn btn-danger" name="remove" href="?remove=<?php echo $value['id'] ?>">delete</a>
                                        </td>
                                     
								</tr>
                                <?php	
								}
							}
								?> 
								
							</table>
                        </div>
                        <script>
function updateQuantity(element, price, id, action) {
    var qtyElement = document.getElementById('qty-' + id);
    var totalElement = document.getElementById('total-' + id);

    var qty = parseInt(qtyElement.value);
    if (action === 'plus') {
        qty++;
    } else if (action === 'minus' && qty > 1) {
        qty--;
    }

    qtyElement.value = qty;
    totalElement.innerHTML = price * qty;
}
</script>

                    

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
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
                            <?php
                            if($sub_total==0){
                                echo "<script>alert('your cart is empty')</script>";
                            }else{
                                ?>
                                <a href="checkout.php" class="btn karl-checkout-btn">Proceed to checkout</a>
                                <?php
                            }
                            
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->

        <?php
include("footer.php");
?>