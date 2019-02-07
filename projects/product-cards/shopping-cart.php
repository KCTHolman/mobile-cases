<link href="shoppingcard.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<?php   session_start();
 include "../../php-includes/db-connection.php";  
 
 $productID = $_GET['product_id'];
 $productPrice = $_GET['product_price'];
 $productAmount = $_GET['amount_cart']; 

 $shoppingCart = [];

 $newShoppingCartItem = array('id' => $productID, 'amount' => $productAmount, 'prize' => $productPrice);

 array_push($shoppingCart,$newShoppingCartItem);
 

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
    echo '<div class="shoppingcard">
        <div class="shoppingcard-product">product id '. $ARRAY[$i]['id'] . '</div>
        <div class="shoppingcard-amount">prijs ' . $ARRAY[$i]['prize'] . '</div>
        <div class="shoppingcard-price"> aantal ' . $ARRAY[$i]['amount'] . '</div>
        <div class="delete-item"><form action="delete-item.php" 
        method="get"><button name="delete_item" value="' . $i . '"><i class="fas fa-trash-alt"></i></button></form></div>
    </div>';
    } // in deze echo moet de verwijderknop met _GET in voorkomen. 
    echo '<br>';

}
//dit wordt het divje wat ik uitpoep
echo printShopCart ($shoppingCart);  // Moet ik hier toch $ARRAY gebruiken en dat ergens anders ook in verwerken?????

/// knop van maken om een item toe te voegen
array_push($shoppingCart, $newShoppingCartItem); 

//verwijderknop

$index = searchForId(5, $shoppingCart);
//$shoppingCart = removeElementFromArray($index, $shoppingCart);
//removeElementFromArray(   DE _GET VARIABLE MOET HIERIN   /, $shoppingCart);


 ?>