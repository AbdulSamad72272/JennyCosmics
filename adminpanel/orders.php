<?php include("header.php"); ?>


<table class="table table-striped me-5">
    <h3 class="text-center mt-3" >Orders</h3>
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone no</th>
                <th>Address</th>
                <th>City</th>
                <th>Pro_name</th>
                <th>Pro_Price</th>
                <th>Pro_Qty</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Date_time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $queryo = $pdo->query("SELECT * FROM orders order by id desc ");
            $resulto = $queryo->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resulto as $datao) {
                ?>
                <tr>
                    <td><?php echo $datao['id'] ?></td>
                    <td><?php echo $datao['name'] ?></td>
                    <td><?php echo $datao['email'] ?></td>
                    <td><?php echo $datao['phone_num'] ?></td>
                    <td><?php echo $datao['address'] ?></td>
                    <td><?php echo $datao['city'] ?></td>
                    <td><?php echo $datao['p_name'] ?></td>
                    <td><?php echo $datao['p_price'] ?></td>
                    <td><?php echo $datao['p_qty'] ?></td>
                    <td><?php echo $datao['t_price'] ?></td>
                    <td><?php echo $datao['status'] ?></td>
                    <td><?php echo $datao['time_date'] ?></td>
                    
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    </div>
        </div>
  </body>
  </html>
  <!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
