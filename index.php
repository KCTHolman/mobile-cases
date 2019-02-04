<?php
    include 'php-includes/db-connection.php';
    session_start();
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"
 href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="index.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <title>Welkom <?php include "projects/logged-in/show-name.php" ?></title>
</head>

<body>
<?php include "projects/navbar/navbar.php"; ?>
    <div class="box3-slide">
   <!--  <div class="slide-text">
<h3>De keuze is duidelijk</h3><br>

Precisie gemaakt om een val van 3 meter te overleven.<br>
Echt metaal, echte bescherming, echte stijl.
<br><br>
                <button href="/mobile-cases/projects/product-cards/cards-page.php" class="button-slide">Koop nu</button></div> -->
        <img src="images/banner/iphone8_5e1cb170-b3f1-468a-b251-64d1cc30a05f_1600x.jpg">
    </div>
    <div class="box4-products">
        <a href="projects/filters/filter-by-product-iphoneXS-max-page.php" class="products-mobile ">
            <div class="mobile-img ">
                <img src="images/mobile/iPhoneXsMax_480x.jpg"></div>
            <div class="mobile-text ">Iphone XS Max</div>
        </a>
        <a href="projects/filters/filter-by-product-Iphone-8-page.php" class="products-mobile">
            <div class="mobile-img">
                <img src="images/mobile/iphone8_silver_480x.jpg"></div>

            <div class="mobile-text">Iphone XS</div>
        </a>
        <a href="projects/filters/filter-by-product-XR-page.php" class="products-mobile">
            <div class="mobile-img">
                <img src="images/mobile/iPhone_Xr_480x.jpg"></div>

            <div class="mobile-text">Iphone XR</div>
        </a>
        <a class="products-mobile" href="projects/filters/filter-by-product-Iphone-8-page.php">
            <div class="mobile-img"><img src="images/mobile/iphone8_silver_480x.jpg"></div>
            <div class="mobile-text">Iphone 8 & 8 plus</div>
        </a>
        <a class="products-mobile" href="projects/filters/filter-by-product-SamsungS9-page.php">
            <div class="mobile-img"><img src="images/mobile/galaxy-S9plus_480x.jpg"></div>
            <div class="mobile-text">Samsung S9 & S9+</div>
        </a>
        <a class="products-mobile" href="projects/filters/filter-by-product-Apple-watch-page.php">
            <div class="mobile-img"><img src="images/mobile/apple_watch_38_480x.jpg"></div>
            <div class="mobile-text">Apple Watch</div>
        </a>
    </div>
    <div class="box5-youtube">
    <iframe  class="box5-youtubevid"  src="https://www.youtube.com/embed/gcEGGnNt3rU"allow="autoplay" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="box6-reviews">
        <div class="reviews-item">
            <div class="review-img"><img src="images/reviews/tweakers.png"></div>
            <div class="review-text">"
                
                De X-doria hoesjes zijn stijlvol, dun en beschermen heel goed. Geen betere bescherming momenteel op de markt"

                <br><br>— Tweakers</div>
        </div>
        <div class="reviews-item">
            <div class="review-img"><img src="images/reviews/kassa.jpg"></div>
            <div class="review-text">"Kwam het beste uit de verf met onze mobielje hoesjes test"

                <br><br> — KASSA</div>
        </div>
        <div class="reviews-item">
            <div class="review-img"><img src="images/reviews/mediamarkt.jpg"></div>
            <div class="review-text">"Bestlopende producten sinds tijden"

                <br><br>— Mediamarkt</div>
        </div>
    </div>
    <div class="box7-info"></div>
    </div>
<!--     <?php include "projects/footer/footer.php"; ?> -->
</body>

</html>