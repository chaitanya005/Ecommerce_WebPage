<?php

    require 'common.php';
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $name = $_SESSION['name'];
    $contact = $_SESSION['contact'];
    $city = $_SESSION['city'];
    $address = $_SESSION['address'];
    
    $regex = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
    if(!pregmatch($regex,$email)){
        echo "Incorrect Email";
    }
       
    if(strlen($password)<6){
        echo'YOUR PASSWORD MUST BE GREATER THAN 6 CHARACHTERS';
    }
    
    $select_query = "SELECT id,email from users where users_id='$user_id'";
    $query_result = mysqli_query($con, $select_query);
    $num_rows = mysqli_num_rows($query_result);
    
    if(mysqli_num_rows($query_result)>0){
        echo  "email error:email already";
    }else{
        $insert_query = "insert into ecommerce.users (`name`,`email`,`password`,`contact`,`city`,`address`) VALUES('$name','$email','$password','$contact','$city','$address')";
        $insert_query_result = mysqli_query($con, $insert_query);
    }
    
    $id = mysqli_insert_id($con);
    
    if(isset($_SESSION['id'])){
        header('location:products.php');
    }
          

?>

