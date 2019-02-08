<?php

    //CARD.PHP

    include "../../php-includes/db-connection.php";       

    $sql_querie = "SELECT product_id, product_image_1, product_text, product_brand, product_price, product_name FROM products";
    
    $db_result = $conn->query($sql_querie);  
    foreach ($db_result as $row)
    {            
        echo    ' <a href="single-card.php?singleproduct='. $row['product_id'] . '"><div action="Ajax-cards.php" method="GET" class="cards"' . 'id=card' . $row['product_id'] . ' onclick="getProductInfo (' . ')">
         <div class="card-image"><img src="../../images/products/' . $row['product_image_1'] . '"></div>
        <div class="card-name mobile-text">' . $row['product_name'] . '</div>
        <div class="card-price">€ '. $row ['product_price'] . '</div></a>
    </div>';
    }
    $conn = null;

?>
