<?php 
session_start();
include "../../php-includes/db-connection.php"; 

echo $_GET['delete_item']; 
echo "<br>";

$product_id = $_GET['delete_item'];
$scArray = $_SESSION['shopping-cart'];

$array_index = searchForId($product_id, $scArray);

echo $array_index; 
echo "<br>";

var_dump($scArray);
echo "<br>";

$scArray = removeElementFromArray($array_index, $scArray);

var_dump($scArray);
echo "<br>";

$_SESSION['shopping-cart'] = $scArray;

 header("Location: ../product-cards/cards-page.php");

 function removeElementFromArray($ELEMENT_INDEX, $ARRAY){
    unset($ARRAY[$ELEMENT_INDEX]);
    $ARRAY = array_values($ARRAY);
    return $ARRAY;
 }

 function searchForId($ID, $ARRAY) {       
    foreach ($ARRAY as $key => $val) {      
        if ($val['id'] == $ID) {          
            return $key;                  
        }
    }
    return null;                   
 }
?>