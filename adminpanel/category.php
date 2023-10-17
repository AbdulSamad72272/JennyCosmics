<?php
include("header.php");
?>

<div class="container mt-3 ">
<a href="insert_category.php"><button type="button" class="btn btn-primary ms-auto d-flex mt-3" >
  Add category
</button></a>

<table class="table table_striped">
<thead>
            <tr>
                <th>ID</th>
                <th>category</th>
                <th>image</th>
                <th>action</th>
            </tr>
 </thead>
<tbody>

<?php
$query=$pdo->query("select * from category order by id desc ");
$result=$query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $data){
    ?>

<tr>
    <td><?php echo $data['id'] ?></td>
    <td><?php echo $data['category'] ?></td>
    <td> <img style='width:100px' src="./assets/images/<?php echo $data['image'] ?>" alt=""></td>
    <td>

    <a href="update_category.php?id=<?php echo $data['id']?>" class="btn btn-primary">update</a>
    <!-- <form action="update_category.php" method="post" style="display: inline;">
        <input type="hidden" name="delete_id_c" value="<?php echo $data['id']; ?>">
        <button type="submit" name="update_categoryy" class="btn btn-primary" >update</button>
    </form> -->
   
    <form action="category.php" method="post" style="display: inline;">
        <input type="hidden" name="delete_id_c" value="<?php echo $data['id']; ?>">
        <button type="submit" name="delete_category" class="btn btn-primary">Delete</button>
    </form> 
    </td>
</tr>
</tbody>

    <?php
}

// for category  delete 
if(isset($_POST['delete_category'])){
    $id=$_POST['delete_id_c'];
    $query=$pdo->prepare("delete from category where id =:id");
    $query->bindParam('id',$id);
    $query->execute();
    echo "<script>alert('data successfully deleted')
    location.assign('category.php')
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
