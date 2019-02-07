<link href="shoppingcard.css" type="text/css" rel="stylesheet">


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
    for ($i=0; $i < count($ARRAY); $i++) { 
/*     echo '<div class="shoppingcard">
        <div class="shoppingcard-product">product id '. $ARRAY[$i]['id'] . '</div>
        <div class="shoppingcard-amount">prijs ' . $ARRAY[$i]['prize'] . '</div>
        <div class="shoppingcard-price"> aantal ' . $ARRAY[$i]['amount'] . '</div>
        <div class="delete-item"><form action="delete-item.php" 
        method="get"><button name="delete_item" value="' . $i . '"><i class="fas fa-trash-alt"></i></button></form></div>
    </div>';
    } // in deze echo moet de verwijderknop met _GET in voorkomen. 
    echo '<br>'; */
    
    echo $i;

    $temp_id  = $ARRAY[$i]['id'];

    echo $temp_id;

    $sql = "SELECT product_id, product_image_1, product_text, product_brand, product_price, product_name 
    FROM products 
    WHERE product_id =2";

  //      echo $sql;

$data = $conn->query($sql);     

foreach ($data as $row);
{   
   echo $row['product_image_1']  . $row['product_name'] . $row['product_id'] . 
    $row['product_price'];

}
//echo printShopCart($ARAY);

 //var_dump($shoppingCart);

    }
}
 
 ?>