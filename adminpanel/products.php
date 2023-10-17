<?php
include("header.php");
?>


           
<div class="container">
<a href="insert_product.php"><button type="button" class="btn btn-primary d-flex mt-3" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
  Add Products
</button></a>
   

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category ID</th>
                <th>Image</th>
                <th>Actions:</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM products order by id desc ");
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data) {
                ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['products'] ?></td>
                    <td><?php echo $data['price'] ?></td>
                    <td><?php echo $data['c_id'] ?></td>
                    <td><img  style='width:100px'src="./assets/images/<?php echo $data['image'] ?>" alt=""></td>
                    <td>
                    
                    <a href="update_product.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">update</a>

                        <form action="products.php" method="post" style="display: inline;">
                            <input type="hidden" name="delete_id" value="<?php echo $data['id']; ?>">
                            <button type="submit" name="delete_product" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

   
</div>


<?php
if(isset($_POST['delete_product'])){
    $id=$_POST['delete_id'];
    $query=$pdo->prepare("DELETE FROM products WHERE id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    echo "<script>alert('Data successfully deleted')
    location.assign('products.php')
    </script>";
   
}

?>



























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
