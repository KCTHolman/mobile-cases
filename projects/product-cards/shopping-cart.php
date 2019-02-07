<?php   session_start();
 include "../../php-includes/db-connection.php";  
 
 $productID = $_GET['product_id'];
 $productPrice = $_GET['product_price'];
 $productAmount = $_GET['amount_cart'];

 $shoppingCart = array(
 ); 

 $newShoppingCartItem = array("id" => $productID, "amount" => $productAmount, "prize" => $productPrice);

 $_SESSION['shopping-cart'] = $shoppingCart; 

 function searchForId($ID, $ARRAY) {       
    foreach ($ARRAY as $key => $val) {      
        if ($val['id'] == $ID) {          
            return $key;                  
        }
    }
    return null;                   
 }

 function printShopCart($ARRAY){
    for ($i=0; $i < count($ARRAY); $i++) { 
    echo "Product index: " . $i;
    echo " | Product id: " . $ARRAY[$i]['id'];
    echo " | product prize:" . $ARRAY[$i]['prize'];
    echo " | Product amount: " . $ARRAY[$i]['amount'];
    echo "<br>";
    }
    echo "<br>";

}
echo printShopCart ($shoppingCart); 


function removeElementFromArray($ELEMENT_INDEX, $ARRAY){
   unset($ARRAY[$ELEMENT_INDEX]);
   $ARRAY = array_values($ARRAY);
   return $ARRAY;
}
$shoppingCart = removeElementFromArray(1, $shoppingCart);
$shoppingCart = removeElementFromArray(2, $shoppingCart);
$shoppingCart = removeElementFromArray(3, $shoppingCart);

echo "<br>";
echo "<br>";
echo printShopCart ($shoppingCart);



 









 ?>