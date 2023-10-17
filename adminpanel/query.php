<?php
include("connection.php");
session_start();

// insert category
if(isset($_POST['add_category'])){
    $name=$_POST['name'];
    $image=$_FILES['image']['name'];
    $image_size=$_FILES['image']['size'];
    $image_tmp_name=$_FILES['image']['tmp_name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $destination="./assets/images/".$image;

    if($image_size<=48000000){
        if($image_extension=="jpg" || $image_extension=="jpeg" || $image_extension=="png"){
            if(move_uploaded_file($image_tmp_name,$destination)){
                $query=$pdo->prepare("insert into category(category,image) values(:name,:image)");
                $query->bindParam('name',$name);
                $query->bindParam('image',$image);
                $query->execute();
                echo "<script>alert('Category added successfully')
                location.assign('category.php')
                </script>";
            }else{
                echo "<script>alert('Failed to move uploaded file.');</script>";
            }

        }else{
            echo "<script>alert('Not a valid image extension. Only JPG, JPEG, and PNG are allowed.');</script>";
        }

    }else{
        echo "<script>alert('File size exceeds the limit. Maximum allowed size is 48MB.');</script>";
    }
}

// id get for category update 

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query = $pdo->prepare("select * from category where id = :id");
    $query->bindParam('id',$id);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC); 
}
//  for category update 

if(isset($_POST['update_category'])){
    $name = $_POST['name'];
    $image = $_FILES['image_c']['name'];
    $temp_image = $_FILES['image_c']['tmp_name'];
    $upload_directory = '../assets/images/';
    
    // Check if the uploaded file is an image and has a valid extension
    $allowed_extensions = array('jpg', 'jpeg', 'png');
    $file_extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    
    if (!in_array($file_extension, $allowed_extensions)) {
        echo "<script>alert('Invalid file format. Only JPG, JPEG, and PNG files are allowed.');
              location.assign('category.php');
              </script>";
        exit();
    }
    
    // Move the uploaded file to the destination directory
    move_uploaded_file($temp_image, $upload_directory . $image);
    
    $query = $pdo->prepare("UPDATE category SET category=:name,image=:image WHERE id=:id");
    $query->bindParam(':name', $name);
    $query->bindParam(':image', $image);
    $query->bindParam(':id', $id);
    $query->execute();
    
    echo "<script> alert('Data successfully updated');
          location.assign('category.php');
          </script>";
}






// insert products 

if(isset($_POST['add_product'])){
    $p_name=$_POST['p_name'];
    $p_price=$_POST['p_price'];
    $c_id=$_POST['c_id'];
    $p_image=$_FILES['p_image']['name'];
    $p_image_size=$_FILES['p_image']['size'];
    $p_image_tmp_name=$_FILES['p_image']['tmp_name'];
    $p_image_extension=pathinfo($p_image,PATHINFO_EXTENSION);
    $destination="./assets/images/".$p_image;
    
    if($p_image_size<=48000000){
    
    if($p_image_extension=='jpg' || $p_image_extension=='jpeg' || $p_image_extension=='png'){
    
    if(move_uploaded_file($p_image_tmp_name,$destination)){
    
        $query=$pdo->prepare("insert into products (products,price,c_id,image) values (:p_name,:p_price,:c_id,:p_image)");
        $query->bindParam('p_name',$p_name);
        $query->bindParam('p_price',$p_price);
        $query->bindParam('c_id',$c_id);
        $query->bindParam('p_image',$p_image);
        $query->execute();
        echo  "<script>alert('product added successfully')
        location.assign('products.php')
        </script>";
    
    }
    }
    else{
        "<script>alert('not valid extension)</script>";
    }
    
    }
    
    else{
        echo "file is greater";
    }
    
    }
    
    
    
    
    // get id for product 
    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query=$pdo->prepare("select * from products where id =:id");
        $query->bindParam('id',$id);
        $query->execute();
        $data2 = $query->fetch(PDO::FETCH_ASSOC); 
    }
    
    
    // for product update 
    
    if(isset($_POST['update_product'])){
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $c_id = $_POST['c_id'];
        $p_image = $_FILES['p_image']['name'];
        $temp_image = $_FILES['p_image']['tmp_name'];
        $upload_directory = '../assets/images/';
        
        // Check if the uploaded file is an image and has a valid extension
        $allowed_extensions = array('jpg', 'jpeg', 'png');
        $file_extension = strtolower(pathinfo($p_image, PATHINFO_EXTENSION));
        
        if (!in_array($file_extension, $allowed_extensions)) {
            echo "<script>alert('Invalid file format. Only JPG, JPEG, and PNG files are allowed.');
                  location.assign('products.php');
                  </script>";
            exit();
        }
        
        // Move the uploaded file to the destination directory
        move_uploaded_file($temp_image, $upload_directory . $p_image);
        
        $query = $pdo->prepare("UPDATE products SET products=:p_name,price=:p_price, c_id=:c_id, image=:p_image WHERE id=:id");
        $query->bindParam(':p_name', $p_name);
        $query->bindParam(':p_price', $p_price);
        $query->bindParam(':c_id', $c_id);
        $query->bindParam(':p_image', $p_image);
        $query->bindParam(':id', $id);
        $query->execute();
        
        echo "<script> alert('Data successfully updated');
              location.assign('products.php');
              </script>";
    }
    


// sign in page 

if(isset($_POST['signin'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $query=$pdo->prepare("select * from users where name=:name && passwords=:password");
    $query->bindParam('name',$name);
    $query->bindParam('password',$pass);
    $query->execute(); 
    $result=$query->fetch(PDO::FETCH_ASSOC);
     
    if($result){
        $_SESSION['id']=$result['id'];
        $_SESSION['name']=$result['name'];
        $_SESSION['image']=$result['image'];
        echo "<script>alert('login successfully') 
        location.assign('index.php')
        </script>";
        
     } 

     else{
         echo"<script>alert('data is not valid') </script>";
     }
    }

// sign up page 

if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $con_pass=$_POST['c_pass'];
    $image=$_FILES['image']['name'];
    $image_size=$_FILES['image']['size'];
    $image_tmp_name=$_FILES['image']['tmp_name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $destination="./assets/images/".$image;
    
if($image_size<=48000000){
if($image_extension=='jpg' || $image_extension=='jpeg' || $image_extension=='png'){
if(move_uploaded_file($image_tmp_name,$destination)){

    if($pass == $con_pass){
        $query=$pdo->prepare("insert into users(name,passwords,image) values(:name,:pass,:image) ");
        $query->bindParam('name',$name); 
        $query->bindParam('pass',$pass);
        $query->bindParam('image',$image);
        $query->execute(); 
        echo "<script>alert('user successfully register')
        location.assign('signin.php')
        </script>";
        
    }
    else{
        echo "<script>alert('password not matched')</script>";

    }
}
}else{
    echo "not valid extension";
}
}else{
    echo "file is greater";
}

}





?>