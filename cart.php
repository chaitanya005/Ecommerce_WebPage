<?php
    require 'includes/common.php';
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
    <title>Document</title>
</head>
<body>
    <?php
        include "includes/header.php";
    ?>>

    <div class="container">
        <div class="table-responsive" style="padding-top: 80px;">
        <table class="table table-striped">
            <tr>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
            </tr>
            <tr>
            <td></td>
            <td>Total</td>
            <td>Rs 0/-</td>
            <td><a href="success.html" class="btn btn-primary">Confirm Order</a></td>
            </tr>
        </table>
        </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>