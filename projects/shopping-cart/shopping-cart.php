<?php
    session_start();
    include '../../php-includes/db-connection.php';

$typeProduct=$_GET['product_name'];
$quantityProduct=$_GET['product_quantity'];


$_SESSION['productID'] = array($typeProduct, $quantityProduct)
;
?>