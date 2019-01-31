<?php
    include 'php-includes/db-connection.php';
    session_start();
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <iframe  class="box5-youtubevid"  src="https://www.youtube.com/embed/gcEGGnNt3rU" allow="autoplay" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="box6-reviews">
        <div class="reviews-item">
            <div class="review-img"><img src="images/reviews/0828_forbes-logo_650x455_99fd6f6c-b2be-4067-9d24-b467c91fcb26_400x@2x.jpg"></div>
            <div class="review-text">"The X-Doria cases are slim, stylish, and protective, and basically offer
                everything I look for in a case. "

                — MacRumors</div>
        </div>
        <div class="reviews-item">
            <div class="review-img"><img src="images/reviews/logo_dfe48a9c-caee-4e8d-8015-c4fb6fcdb7a0_400x@2x.png"></div>
            <div class="review-text">"I really liked the X-Doria Defense Lux case I tested out for the iPhone 6/6s.

                The company is going all out with new cases for the iPhone X. The iPhone X Case Defense Shield -one of
                the samples sitting on my desk right now - offers military grade drop protection to keep that glass
                from shattering."

                — Forbes</div>
        </div>
        <div class="reviews-item">
            <div class="review-img"><img src="images/reviews/logo_techradar_400x@2x.png"></div>
            <div class="review-text">"Protection for your pricey iPhone 8 can come at a high cost, but it doesn’t have
                to. The X-Doria Defense Clear case costs less than most ruggedized cases.This case is no frills, but if
                all you’re looking for is protection on the cheap, look no further."

                — TechRadar</div>
        </div>
    </div>
    <div class="box7-info"></div>
    </div>

</body>

</html>