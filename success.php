<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    
    $user_id = $_SESSION['user_id'];
    $item_ids_string = $_GET['itemsid'];
    
    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
    mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/settings.css">
    <title>Settings</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
                <h1>YaY! Your order has Confirmed.</h1>
                <h3>Thank you for shopping with us!</h3>
                <p><a href="products.php">Click here</a> for continue the shopping.</p>
        </div>
        
    </div>
</body>
</html>