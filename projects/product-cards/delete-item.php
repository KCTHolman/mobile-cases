<?php 
session_start();
 include "../../php-includes/db-connection.php";  
 echo $_GET['delete_item']; 


$productDelete = $_GET['delete_item']; 

$shoppingCart = removeElementFromArray($productDelete, $_SESSION['shopping-cart']);
$_SESSION['shopping-cart'] = $shoppingCart;

function removeElementFromArray($ELEMENT_INDEX, $ARRAY){
    unset($ARRAY[$ELEMENT_INDEX]);
    $ARRAY = array_values($ARRAY);
    return $ARRAY;

 }
var_dump($shoppingCart);

header("location:/mobile-cases/projects/product-cards/push-product.php");
?>