<?php

    //CARD.PHP

    include "../../php-includes/db-connection.php";        

    $sql_querie = "SELECT  product_id, product_price, product_name, product_image_1 FROM products";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo    '<div action="Ajax-cards.php" method="GET" class="cards"' . 'id=card' . $row['product_id'] . ' onclick="getProductInfo (' . ')">
        <div class="card-image"><img src="../../images/products/' . $row['product_image_1'] . '"></div>
        <div class="card-name">' . $row['product_name'] . '</div>
        <div class="card-price">€ '. $row ['product_price'] . '</div>
    </div>';
    }
    $conn = null;

?>
