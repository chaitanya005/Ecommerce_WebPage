<?php
    require 'includes/common.php';
    
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
        include "includes/header.php";
    ?>
        <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <p class="text-warning">Login to make a purchase</p>
                    <form action="login_submit.php" method="POST">
                        <div class="form-group">
                            <label for="inputEmail" >Email : </label>
                            <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>
                        <div class="form-group">
                            <label for="inputPass">Password :</label>
                            <input type="password" class="form-control" id="inputPass" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </form> 
                </div>
                <div class="panel-footer"><a href="">Don't have an account? Register</a></div>
        </div>

        <?php
            include 'includes/footer.php';
        ?>
</body>
</html>

  
  

