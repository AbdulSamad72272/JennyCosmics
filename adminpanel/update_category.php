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
    <title>Document</title>
</head>
<body>
    
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            
                            
                        
       <div class="container">
                <h3 class="text-center">UPDATE CATEGORY</h3>
            <form action="" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="">category</label>
                    <input type="text" name="name" id="" value="<?php echo $data['category']?>" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>

                  <div class="form-group">
                     <label for="">category image</label>
                     <img style='width:100px' src="./assets/images/<?php echo $data['image']?>" alt="">
                     <input type="file" name="image_c" id=""  class="form-control" placeholder="" aria-describedby="helpId">
                  </div>

                  <input type="submit" class="btn btn-dark mt-3" name="update_category" value="update">
           </form>
       </div> 


                </div>
            </div>
        </div>





</body>
</html>