<?php   session_start();
 include "../../php-includes/db-connection.php";  
 
 

 $productID = $_GET['product_id'];
 $productPrice = $_GET['product_price'];
 $productAmount = $_GET['amount_cart'];


 /////////////////  hiermee zet je de strings in een sessie/////////////////////
/*  
 if(isset($_SESSION['product_id'])){
    var_dump( $_SESSION['product_id'] );
 
 }
 if(isset($_SESSION['product_price'])){
    var_dump( $_SESSION['product_price'] );
 }
 
if(isset($_SESSION['amount_cart'])){
   var_dump( $_SESSION['amount_cart'] );
}
 */
 ///////////////   HIERMEE ZET IK DE SESSIE IN EEN ARRAY  ///////////////////////////////////



//  if(isset($_SESSION['shopping-cart'])){
//     var_dump( $_SESSION['shopping-cart'] );
//  }

 /////////////////////////////


 /// ingevuld om een testomgeving te hebben 


 $shoppingCart = array(
    array("id"=>"1","prize"=>"24", "amount" =>1 ),
    array("id"=>"2","prize"=>"25", "amount" =>1 ),
    array("id"=>"3","prize"=>"14","amount" =>1 ),
    array("id"=>"4","prize"=>"3", "amount" =>1 ),
    

 ); //Array voor shoppingCart items;

 $newShoppingCartItem = array("id" => $productID, "amount" => $productAmount, "prize" => $productPrice);

 //array_push($shoppingCart, $newShoppingCartItem);  // hiermee push ik een nieuw item in mijn session array 

 
 var_dump($shoppingCart); 

 $_SESSION['shopping-cart'] = $shoppingCart; 

/*  foreach ($shoppingCart as $shoppingItem){
     echo $shoppingItem['id'];
     echo "<br>";
 } */



/*  echo searchForId(2, $shoppingCart);

 echo searchForId(50, $shoppingCart);

 echo searchForId(4, $shoppingCart);
 */              /// hij zal dan 2, null 3 als uitkomst geven
 /////////////////////

 function searchForId($ID, $ARRAY) {       // $ID als ik 3 invul komt als uitkomst 2 (0,1,2) 
    foreach ($ARRAY as $key => $val) {     // $val is het stukje wat je uit je array plukt   $key is de [0] of [1] array 
        if ($val['id'] == $ID) {          
            return $key;                   // als hij dus iets vind wat gelijk is aan ['id'] in de array 
        }
    }
    return null;                           // geeft null terug als antwoord als niks overeenkomt 
 }

 function printShopCart($ARRAY){                        // de input hiervan is de shoppingcart ????
    for ($i=0; $i < count($ARRAY); $i++) { 
    echo "Product index: " . $i;
    echo " | Product id: " . $ARRAY[$i]['id'];
    echo " | product prize:" . $ARRAY[$i]['prize'];
    echo " | Product amount: " . $ARRAY[$i]['amount'];
    echo "<br>";
    }
    echo "<br>";

}
echo printShopCart ($shoppingCart); // hiermee laat ik de hele winkelwagentje zien. 


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
echo printShopCart ($shoppingCart);/// items verwijderd uit shoppingCart



 









 ?>