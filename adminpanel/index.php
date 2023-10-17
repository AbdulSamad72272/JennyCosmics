<?php
include("header.php");
if(!isset($_SESSION['id'])){
    echo "<script>location.assign('signin.php')</script>";
}
?>

       
    
<div class="container mt-5">
    <h2 class="text-center mt-5 ">Welcome To Jenny Cosmics! <br> <?php echo $_SESSION['name'] ?> </h2>
<div class="row justify-content-center mt-3">
<div class="col-md-3 col-xl-3">
    <?php $my_query = $pdo->query("select count(*) as total_users from users");
    $my_query->execute();
    $users = $my_query->fetch(PDO::FETCH_ASSOC);
    if($users){
        $total_users = $users['total_users'];
    }
    ?>
         <div class="card widget-card-1">
         <div class="card-block-small">
         <i class="icofont icofont-group bg-c-blue card1-icon"></i>
         <span class="text-c-blue f-w-600">Total Users</span>
                  <h4> <?php echo $total_users ?> </h4>
         </div>
         </div>
         </div>

         <div class="col-md-3 col-xl-3">
    <?php $my_query = $pdo->query("select count(*) as total_products from products");
    $my_query->execute();
    $users = $my_query->fetch(PDO::FETCH_ASSOC);
    if($users){
        $total_users = $users['total_products'];
    }
    ?>
         <div class="card widget-card-1">
         <div class="card-block-small">
         <i class="icofont icofont-package bg-c-blue card1-icon"></i>
         <span class="text-c-blue f-w-600">Total Products</span>
                  <h4> <?php echo $total_users ?> </h4>
         </div>
         </div>
         </div>

         <div class="col-md-3 col-xl-3">
    <?php $my_query = $pdo->query("select count(*) as total_category from category");
    $my_query->execute();
    $users = $my_query->fetch(PDO::FETCH_ASSOC);
    if($users){
        $total_users = $users['total_category'];
    }
    ?>
         <div class="card widget-card-1">
         <div class="card-block-small">
         <i class="icofont icofont-box bg-c-blue card1-icon"></i>
         <span class="text-c-blue f-w-600">Total Categorys</span>
                  <h4> <?php echo $total_users ?> </h4>
         </div>
         </div>
         </div>

         <div class="col-md-3 col-xl-3">
    <?php $my_query = $pdo->query("select count(*) as total_orders from orders");
    $my_query->execute();
    $users = $my_query->fetch(PDO::FETCH_ASSOC);
    if($users){
        $total_users = $users['total_orders'];
    }
    ?>
         <div class="card widget-card-1">
         <div class="card-block-small">
         <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
         <span class="text-c-blue f-w-600">Total Orders</span>
                  <h4> <?php echo $total_users ?> </h4>
         </div>
         </div>
         </div>
</div>
<div class="row">
    <h2 class="text-center mt-3 mb-4">View report of top ten best selling products</h2>
<table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>status</th>
                <th>date_time</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $queryu = $pdo->query("SELECT id,p_id,p_name,p_price,status,time_date,p_qty,SUM(p_id) FROM orders GROUP BY p_name ORDER BY p_id ASC limit 10");
            $resultu = $queryu->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resultu as $datau) {
                ?>
                <tr>
                    <td><?php echo $datau['id'] ?></td>
                    <td><?php echo $datau['p_name'] ?></td>
                    <td><?php echo $datau['p_price'] ?></td>
                    <td><?php echo $datau['p_qty'] ?></td>
                    <td><?php echo $datau['status'] ?></td>
                    <td><?php echo $datau['time_date'] ?></td>
                    
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    </div>

    <div class="row">
    <h3 class="text-center mt-3 mb-4">View report of top ten Clients/Users</h3>
<table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>Phone no</th>
                <th>cell no</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Product orderd</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $queryu = $pdo->query("SELECT id,u_id,name,phone_num,cell_no,DOB,email,address,city,p_name,SUM(u_id) FROM orders GROUP BY name ORDER BY u_id desc limit 10");
            $resultu = $queryu->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resultu as $datau) {
                ?>
                <tr>
                    <td><?php echo $datau['id'] ?></td>
                    <td><?php echo $datau['name'] ?></td>
                    <td><?php echo $datau['phone_num'] ?></td>
                    <td><?php echo $datau['cell_no'] ?></td>
                    <td><?php echo $datau['DOB'] ?></td>
                    <td><?php echo $datau['email'] ?></td>
                    <td><?php echo $datau['address'] ?></td>
                    <td><?php echo $datau['city'] ?></td>
                    <td><?php echo $datau['p_name'] ?></td>
                    
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</div>

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
</script>
</body>

</html>
