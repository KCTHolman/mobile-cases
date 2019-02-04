<link href="product-info.css" type="text/css" rel="stylesheet">
    <link href="../../index.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">


<?php 
 include "../../php-includes/db-connection.php";      
 

 $onecard = $_GET['singleproduct'];

 $sql = "SELECT product_id, product_image_1, product_text, product_brand, product_price, product_name 
         FROM products 
         WHERE product_id ='$onecard'";
 
 $data = $conn->query($sql);     
  
 foreach ($data as $row);
{   
        echo     '<div class="infoleft ">
        <img src="../../images/products/' . $row['product_image_1'] . '">
    </div>
    <div class="inforight">
        <div class="product-info-title">' . $row['product_name'] . '</div>
        <div class="product-info-price">' . $row['product_price'] . '</div>
        <div class="product-info-review">*****</div>
        <div class="to-cart">
            <div class="product-info-quantity">
                <input class="number-cart" type="number">
            </div>
            <button class="product-info-cart">Toevoegen</button>
        </div>
        <div class="product-info-description">
            ' . $row['product_text'] . '
        </div>';
    }