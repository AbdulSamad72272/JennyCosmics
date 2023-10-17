<?php
include("query.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                        
                        <div class="container">
                            <h3 class="text-center">UPDATE PRODUCT</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">product name</label>
            <input type="text" name="p_name" value="<?php echo $data2['products'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">product price</label>
            <input type="text" name="p_price" value="<?php echo $data2['price'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">product image</label>
            <img style='width:100px' src="./assets/images/<?php echo $data2['image'] ?>" alt="">
            <input type="file" name="p_image" value="<?php echo $data['image']?>  class="form-control"  placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">category id</label>
            <?php echo $data2['c_id'] ?>
            <select name="c_id" class="form-control" value="<?php echo $data2['c_id'] ?>">
                <option value="<?php echo $data2['c_id'] ?>">select category</option>
                <?php
                $query = $pdo->query("SELECT * FROM category");
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $data) {
                    ?>
                    <option value="<?php echo $data['id'] ?>"> <?php echo $data['id'] ?> </option>
                <?php
                }
                ?>
            </select>
        </div>


        <input type="submit" name="update_product" value="update" class="btn btn-primary mt-3">
    </form>
</div>


                </div>
            </div>
        </div>





</body>
</html>