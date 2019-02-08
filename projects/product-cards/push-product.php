
<?php 
session_start();
 include "../../php-includes/db-connection.php";  
 include "../navbar/navbar-later-folder.php";

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

 //   var_dump($shoppingCart);


 function searchForId($ID, $ARRAY) {       
    foreach ($ARRAY as $key => $val) {      
        if ($val['id'] == $ID) {          
            return $key;                  
        }
    }
    return null;                   
 }

 printShopCart($shoppingCart);



 function printShopCart($ARRAY){
    include "../../php-includes/db-connection.php";
     echo "<br>";
    for (  $i=0; $i < count($ARRAY); $i++ ) { 
   //  echo '<div class="shoppingcard">
   //      <div class="shoppingcard-product">product id '. $ARRAY[$i]['id'] . '</div>
   //      <div class="shoppingcard-amount">prijs ' . $ARRAY[$i]['prize'] . '</div>
   //      <div class="shoppingcard-price"> aantal ' . $ARRAY[$i]['amount'] . '</div>
   //      <div class="delete-item"><form action="delete-item.php" 
   //      method="get"><button name="delete_item"><a href="delete-item.php"></a><i class="fas fa-trash-alt"></i></button></form></div>
   //  </div>"';
   // //noodoplossing, sessie wordt leegheaald
   
   $temp_id  = $ARRAY[$i]['id'];
   echo $temp_id;
   getItemFromDatabase($temp_id);
    } // in deze echo moet de verwijderknop met _GET in voorkomen. 
    echo '<br>'; 
}

function getItemFromDatabase($product_id){
   global $conn;

   $sql = "SELECT product_id, product_image_1, product_text, product_brand, product_price, product_name 
   FROM products 
   WHERE product_id = '$product_id' ";

   $data = $conn->query($sql);     

   foreach ($data as $row);
   {   
      echo 
      '<div class="shoppingcard-product">product id '. $row['product_name'] . $row['product_image_1'] . '</div>
         <div class="shoppingcard-price">prijs ' .  $row['product_price'] . '</div>
         <div class="shoppingcard-amount"> aantal ' .  1 . '</div>
         <div class="delete-item"><form action="delete-item.php" 
         method="get"><button name="delete_item" value="' . $product_id . '"><i class="fas fa-trash-alt"></i></button></form></div>
      </div>';$row['product_image_1']  . $row['product_name'] . $row['product_id'] . 
      $row['product_price'];

   }

}
 
 ?>

