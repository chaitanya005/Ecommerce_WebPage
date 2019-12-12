<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/signup.css">
</head>

<body>
        <?php
            include "includes/header.php";
        ?>
    
    <div class="container-fluid">
        <form action="signup_script" class="form_signup" method="POST">
                <h1><strong>SIGN UP</strong></h1>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Name" pattern="[a-zA-Z0-9]+" name="name">
                <input class="form-control" type="email" placeholder="Email" name="email">
                <input class="form-control" type="password" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="password">
                <input class="form-control" type="contact" placeholder="Contact" pattern="^\d{10}$" name="contact">
                <input class="form-control" type="city" placeholder="City" name="city" pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$">
                <input class="form-control" type="address" placeholder="Address" name="address" pattern="([a-zA-Z0-9]| |/|\\|@|#|\$|%|&)+">
                    <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
    
    <?php
        include 'includes/footer.php';
    ?>


</body>
</html>