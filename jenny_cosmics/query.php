<?php
session_start();
include("connection.php");

// shoping cart 

if(isset($_POST['addtocart'])){
	if(isset($_SESSION['cart'])){
		
        // for duplication
		$productid=array_column($_SESSION['cart'],'id');
		if(in_array($_POST['id'],$productid)){
			echo "<script>
			alert('product already added into the cart');
			location.assign('index.php');
			</script>";
		}else{ 


		$count=count($_SESSION['cart']);
		$_SESSION['cart'][$count]=array('id'=>$_POST['id'],'name'=>$_POST['name'],'price'=>$_POST['price'],'image'=>$_POST['image'],'qty'=>$_POST['quantity'],);
		echo "<script>
		alert('product added into cart')
		location.assign('index.php')
		</script>";
}
	}else{
		$_SESSION['cart'][0]=array('id'=>$_POST['id'],'name'=>$_POST['name'],'price'=>$_POST['price'],'image'=>$_POST['image'],'qty'=>$_POST['quantity'],);
		echo "<script>
		alert('product added into cart')
		location.assign('index.php')
		</script>";
	}
}
// for card product remove 
if(isset($_GET['remove'])){
	foreach($_SESSION['cart'] as $key => $value){
		if($_GET['remove'] == $value['id']){
			unset($_SESSION['cart'][$key]);
			// reset array 
			$_SESSION['cart']=array_values($_SESSION['cart']);
			echo "<script>alert('product remove successfully')
			location.assign('cart.php')</script>";
		}
	}
}

// / sign in page 

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
        echo "<script>alert('login successfully') 
        location.assign('index.php');
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
   
    if(filter_var($name,FILTER_VALIDATE_STRING)){}
    if($pass == $con_pass){
        $query=$pdo->prepare("insert into users(name,passwords) values(:name,:pass) ");
        $query->bindParam('name',$name); 
        $query->bindParam('pass',$pass);
        $query->execute(); 
        echo "<script>alert('signup successfully ')
        location.assign('signin.php');
        </script>";
       
        
    }
    else{
        echo "<script>alert('password not matched')</script>";

    }
}


// orders 

if (isset($_POST['checkout'])) {
        // Retrieve user ID from the session (make sure you set $_SESSION['id'] somewhere before this code)
        $u_id = $_SESSION['id'];

        // Loop through the cart items and insert them into the database
        foreach ($_SESSION['cart'] as $key => $value) {
            $p_id = $value['id'];
            $p_name = $value['name'];
            $p_price = $value['price'];
            $p_qty = $value['qty'];
            $t_price = $value['price'] * $value['qty'];
            $name = $_POST['name'];
            $phone_num = $_POST['phone_num'];
            $cell_num = $_POST['cell'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $date= $_POST['date'];
            $category = $_POST['category'];
            $remarks = $_POST['remarks'];
           

            // Prepare the insert query
        $query = $pdo->prepare("insert into orders (u_id, name, phone_num, cell_no, DOB, category, remarks, email, address, city, p_id, p_name, p_price, p_qty, t_price) 
        values (:u_id, :name, :phone_num, :cell, :date, :cate, :remarks, :email, :address, :city, :p_id, :p_name, :p_price, :p_qty, :t_price)");
            // Bind parameters and execute the query
            $query->bindParam(':u_id', $u_id);
            $query->bindParam(':name', $name);
            $query->bindParam(':phone_num', $phone_num);
            $query->bindParam(':cell', $cell_num);
            $query->bindParam(':date', $date);
            $query->bindParam(':cate', $category);
            $query->bindParam(':remarks', $remarks);
            $query->bindParam(':email', $email);
            $query->bindParam(':address', $address);
            $query->bindParam(':city', $city);
            $query->bindParam(':p_id', $p_id);
            $query->bindParam(':p_name', $p_name);
            $query->bindParam(':p_price', $p_price);
            $query->bindParam(':p_qty', $p_qty);
            $query->bindParam(':t_price', $t_price);
            $query->execute();
        }

        // Clear the cart after successful insertion
        unset($_SESSION['cart']);

        // Show a success message to the user and redirect to index.php
        echo "<script>alert('Order added successfully'); location.assign('index.php');</script>";
    }

?>



