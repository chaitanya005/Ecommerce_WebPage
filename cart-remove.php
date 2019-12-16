<?php

require 'common.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id  = $_GET['id'];
    $user_id = $_GET['user_id'];
}

$delete_query = "DELETE from  users_products where id='$id' AND user_id='$user_id'";
$delete_result = mysqli_query($con, $delete_query);
header("location:cart.php");
        
?>
