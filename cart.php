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
</head>
<body>
    <?php
        include "includes/header.php";
        ?>
        
    
        $user_id=$_SESSION['user_id'];
        $inner_join_query = "select items from users_products inner join users on users_products.user_id='$users_id'";
        $inner_join_result = mysql$user_id=$_SESSION['user_id'];i_query($con, $inner_join_query);
        $rows_num  = mysqli_num_rows($inner_join_result);
        
        if(mysqli_num_rows($inner_join_result) == 0){
            echo 'Add item to cart first!';
        }else{
           
            $id = 0;
            while(mysqli_num_rows($inner_join_result)!=0){
             $price = $_SESSION['price'];
             $sum += $price;
             $new_id = $_SESSION['id'];
             $id .= $row['id'] .',';
            }
            
            echo "Items added in the cart '$id' by user $user_id ";
        }
            
    ?>

    <div class="container">
        <div class="table-responsive" style="padding-top: 80px;">
        <table class="table table-striped">
            
            <?php
                $sum = 0;
                $user_id=$_SESSION['user_id'];
                $inner_join_query = "select items.price as price,items.name as name from users_products inner join items on users_products.item_id='$items_id' where users_products.user_id='$user_id' and status='Added to cart'";
                $inner_join_result = mysqli_query($con, $inner_join_query);
                
                 if(mysqli_num_rows($inner_join_result) >= 1){
                  
                  
                ?>
                    
            ?>
            <thead>
            <tr>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_num_rows($inner_join_result)){
                    $sum += $price;
                  $id = '';
                  $id .= $row['id'] . ',';
                echo "<tr> 
                    <td>"."#".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>Rs " . $row["Price"] . "</td>
                    <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                    </tr>";
                }
                 $id = rtrim($id,",");
                 echo "<tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs " . $sum . "</td>
                            <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                       </tr>";  
                ?>
            </tbody>
           <?php
                 }else{
                     echo '<center><h2>Add items to the cart first!</h2></center>';
                 }
            ?>    
        </table>
        </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>