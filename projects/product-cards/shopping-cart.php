<?php   session_start();
 include "../../php-includes/db-connection.php";  
 
 $productID = $_GET['product_id'];
 $productPrice = $_GET['product_price'];
 $productAmount = $_GET['amount_cart']; 

 $shoppingCart = [];

 $newShoppingCartItem = array('id' => $productID, 'amount' => $productAmount, 'prize' => $productPrice);

 array_push($shoppingCart,$newShoppingCartItem); /// is dit nou een array teveel??? synta lijkt mij juist

 $_SESSION['shopping-cart'] = $shoppingCart; 

 var_dump ($shoppingCart);
 var_dump ($productID);   //
 var_dump ($productAmount);// moet ik deze 3 in de functie opnieuw beschrijven ???? want in function printShopCart kent hij ze niet meer
 var_dump ($productPrice);  //

 function searchForId($ID, $ARRAY) {       
    foreach ($ARRAY as $key => $val) {      
        if ($val['id'] == $ID) {          
            return $key;                  
        }
    }
    return null;                   
 }

 function printShopCart($ARRAY){
     echo "<br>";
    for ($i=0; $i < count($ARRAY); $i++) { 
    echo 'Product index: ' . $i;
    echo ' | Product id: ' . $ARRAY[$i]['id'];
    echo ' | product prize:' . $ARRAY[$i]['prize'];
    echo ' | Product amount: ' . $ARRAY[$i]['amount'];
    echo '<br>';
    } // in deze echo moet de verwijderknop met _GET in voorkomen. 
    echo '<br>';

}
//dit wordt het divje wat ik uitpoep
echo printShopCart ($shoppingCart);  // Moet ik hier toch $ARRAY gebruiken en dat ergens anders ook in verwerken?????

/// knop van maken om een item toe te voegen
array_push($shoppingCart, $newShoppingCartItem); 

//verwijderknop

$index = searchForId(5, $shoppingCart);
$shoppingCart = removeElementFromArray($index, $shoppingCart);
//removeElementFromArray(   DE _GET VARIABLE MOET HIERIN   /, $shoppingCart);

function removeElementFromArray($ELEMENT_INDEX, $ARRAY){
   unset($ARRAY[$ELEMENT_INDEX]);
   $ARRAY = array_values($ARRAY);
   return $ARRAY;
}
 ?>