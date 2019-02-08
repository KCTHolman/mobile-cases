<link href="product-info.css" type="text/css" rel="stylesheet">
    <link href="../../index.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

        


<?php 
 include "../../php-includes/db-connection.php";      
   session_start();
   include "../navbar/navbar-later-folder.php";

   if (!isset( $_SESSION['shopping-cart'])){
    $shoppingCart = [];
 }

 else {
    $shoppingCart= $_SESSION['shopping-cart'];
 }

 $onecard = $_GET['singleproduct'];

 $sql = "SELECT product_id, product_image_1, product_text, product_brand, product_price, product_name 
         FROM products 
         WHERE product_id ='$onecard'";
 
 $data = $conn->query($sql);     
  
 foreach ($data as $row);
{   
        echo     '<div class="container-cards"><div class="infoleft ">
        <img src="../../images/products/' . $row['product_image_1'] . '">
    </div>
    <form action="shopping-cart.php" method="GET">
        <div class="inforight">
            <div class="product-info-title">' . $row['product_name'] . '
                <input type="hidden" name="product_id" value='. $row['product_id'] . '></input></div>
            <div class="product-info-price">
                <input type="hidden" name="product_price" value=' . $row['product_price'] . '></div>
            <div class="product-info-review">*****</div>
            <div class="to-cart">
    
                <div class="product-info-quantity">
    
                    <input class="number-cart" type="number" name="amount_cart">
                </div>
                <a href="shopping-cart"><button class="product-info-cart">Toevoegen</button><a/>
    
            </div>
    </form>
    
    <div class="product-info-description">
        ' . $row['product_text'] . '
    </div></div>';
    }


    ?>