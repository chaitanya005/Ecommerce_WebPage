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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/settings.css">
    <title>Settings</title>
</head>

<body>

        <?php
            include "includes/header.php";
        ?>

    <div class="container-fluid">
        <form action="" class="change_pass">
            <h3><strong>Change Password</strong></h3>
            <div class="form-group">
            <input type="password" placeholder="Old Password" class="form-control">
            <input type="password" placeholder="New Password" class="form-control">
            <input type="password" placeholder="Re-type Password" class="form-control">
            <button  class="btn btn-primary">Change</button>
            </div>
        </form>
    </div>


    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>