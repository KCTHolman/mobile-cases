<?php include "../../php-includes/db-connection.php";
   if (!isset( $_SESSION['card-number'])){
    $shoppingCart = "0";
 }

 else {
    $shoppingCart= $_SESSION['cardnumber'];
 }
   ?>
<div class="container-homepage">
        <div class="box1-banner">
            <div class="banner-text">Gratis verzending in heel Nederland</div>
        </div>
        <div class="box2-nav ">

            <div class="nav-menubar">
                <a href="../../index.php" class="nav-logo"><img src="../../images/XDORIA_205x@2x.png"></a>
                <div class="nav-buttons">
                    <a href="../product-cards/cards-page.php">Shop</a>
                    <a href="../../index.php">Contact</a>
                </div>
                <div class="nav-icons-right">
                    <a href="../login/login-page.php">inloggen</a>
                    <i class="fas fa-search"></i>
                    <i class="fas fa-shopping-cart"><p><?php  ?></p></i>
                </div>

            </div>

        </div>
    </div>
