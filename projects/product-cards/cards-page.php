<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="cards.css" type="text/css" rel="stylesheet">
    <link href="../../index.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <title>Cards</title>
</head>
<body>
<?php include "../navbar/navbar-later-folder.php";
   session_start(); 
   
   ?>


<div class="wrapper-card debug">

        <div class="left-filters debug">
        <div class="empty-space"></div>
        <ul>
            <li>Iphone</li>
            <li>Samsung</li>
            
        </ul>
        <?php var_dump($_SESSION['shopping-cart'])?>
    </div>
    <div class="container-cards debug">
    <div class="empty-space"></div>
    <?php include "cards.php"; ?>
</div>
<?php var_dump($_SESSION['shopping-cart'])?>
</div>

<script src="card.js"></script>
</body>
<!-- <?php include "../footer/footer.php"; ?> -->

</html>