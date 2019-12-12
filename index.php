
<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
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
    <link rel="stylesheet" href="css/style.css">
    <title>Home | Page</title>
</head>
<body>

    
    <?php
        include "includes/header.php";
    ?>
    <div id="banner_image">
        <div class="container">
            <div id="banner-content">
                <a href="products.php" class="btn btn-danger btn-lg active">Shop now</a>
            </div>
        </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>