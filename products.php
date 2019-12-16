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
    
    <title>Document</title>
</head>
<body>
        <?php
            include "includes/header.php";
            include "includes/check_if_added.php";
        ?>

    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
        </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs.36000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?> 
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.40000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/3.jpg" alt="">
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.50000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/4.jpg" alt="">
                            <h3>Olympus DSLR</h3>
                            <p>Price:Rs.60000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/9.jpg" alt="">
                            <h3>Titan Model #301</h3>
                            <p>Price:Rs.13000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/10.jpg" alt="">
                            <h3>Titan Model #301</h3>
                            <p>Price:Rs.30000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/11.jpg" alt="">
                            <h3>HMT Milan</h3>
                            <p>Price:Rs.56000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/12.jpg" alt="">
                            <h3>Faber Luba #111</h3>
                            <p>Price:Rs.72000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/8.jpg" alt="">
                            <h3>H&W</h3>
                            <p>Price:Rs.800.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/6.jpg" alt="">
                            <h3>Luis Phil</h3>
                            <p>Price:Rs.6000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/13.jpg" alt="">
                            <h3>John Zok</h3>
                            <p>Price:Rs.3000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/14.jpg" alt="">
                            <h3>Jhalsani</h3>
                            <p>Price:Rs.1000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>                                 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>            
                            <?php                             
                            } else {                                                         
                           if (check_if_added_to_cart(1)) {                           
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                } else {                                     
                             ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                            <?php                                
                            }                          
                          }                           
                        ?>
                            <button class="btn btn-primary btn-block">Add to cart</button>
                        </div>
                </div>
            </div>
        
    </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>