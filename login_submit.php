<?php
    require 'includes/common.php';
    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
   
    $pass = md5($password);
    
    $user_login_query = "SELECT email,password from users";
    $user_login_submit = mysqli_query($con, $user_login_query) or die(mysqli_error($con));
    $no_of_rows = mysqli_num_rows($user_login_submit);
    
    if(mysqli_num_rows($no_of_rows) ==  0){
        echo "No users";
    }else{
        $rows = mysqli_fetch_array($no_of_rows);
    }
    
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
    
    
?>

