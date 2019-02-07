<?php 
session_start();
 include "../../php-includes/db-connection.php";  


 if (!isset( $_SESSION['shopping-cart'])){
    $shoppingCart = [];
 }

 else {
    $shoppingCart= $_SESSION['shopping-cart'];
 }


    
//$_SESSION['shopping-cart'] = $shoppingCart;

 $productID = $_GET['product_id'];
 $productPrice = $_GET['product_price'];
 $productAmount = $_GET['amount_cart']; 


$newShoppingCartItem = array('id' => $productID, 'amount' => $productAmount, 'prize' => $productPrice);
 array_push($shoppingCart, $newShoppingCartItem);

 $_SESSION['shopping-cart'] = $shoppingCart;



 var_dump($shoppingCart);


 
 ?>