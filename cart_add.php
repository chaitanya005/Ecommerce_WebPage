<?php
    include 'common.php';
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
            
    $id = $_GET['id'];
    $insert_cart_query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    $insert_cart_result = mysqli_query($con, $insert_cart_query);
    header("location:products.php");
    }
?>

