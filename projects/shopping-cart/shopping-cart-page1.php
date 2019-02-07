<?php 
//include '../../php-includes/db-connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="nav-bar">
            <div class="shopping-cart-image"></div>
            <div class="shopping-cart-number">hier komt het aantal wat in het winkelwagentje zit</div>
        </div>

        <div class="shopping-cart-container">
            <div class="shopping-cart">

                <form action="shopping-cart.php" method="GET">
                    <input type="text" name="product_name" placeholder="product"  >
                    <input type="number" name="product_quantity" placeholder="aantal" >
                <button class="button1">voeg toe aan winkelwagenvtje</button>
            
            <?php
                if(isset($_SESSION['cartArray'])){
                    var_dump( $_SESSION['cartArray'] );
                }             
            ?>
            
            </form>
<a href="shopping-cart-page2.php">pagina 2</a>


            </div>
            <div class="shopping-cart-summary"></div>
        </div>
    </div>
</body>

</html>