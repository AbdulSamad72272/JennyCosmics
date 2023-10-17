<?php
include("query.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>insert</title>
      <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    





<section class="login p-fixed d-flex text-center bg-light ">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        
                    <div class="container">
<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
  <label for="">product name</label>
  <input  style="background-color:white" type="text" name="p_name" id="" class="form-control" placeholder="product name" aria-describedby="helpId">
</div>

<div class="form-group">
  <label for="">product price</label>
  <input  style="background-color:white" type="text" name="p_price" id="" class="form-control" placeholder="product price" aria-describedby="helpId">
</div>

<div class="form-group">
  <label for="">product image</label>
  <input type="file" name="p_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>

<div class="form-group">
  <label for="">category id</label>
  <select name="c_id" id="" class="form-control">
    <option value="">select category</option>
    <?php
    
    $query=$pdo->query("select * from category");
    $result=$query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $data){
        ?>
        <option value="<?php echo $data['id']?>"><?php echo $data['category']?></option>
        <?php
    }
    ?>
  </select>
</div>
<input type="submit" name="add_product" value="add product" class="btn btn-primary mt-3 mb-3">
</form>
</div>

                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>



</body>
</html> 
