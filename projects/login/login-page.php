<?php
    include '../../php-includes/db-connection.php';
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../index.css" type="text/css" rel="stylesheet">
    <link href="login.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>
<?php include "../navbar/navbar.php"; ?>
<div class="container-login">
        <div class="login-title">Login voor klanten</div>
        <div class="login-screen">
        <form action="login.php" method="GET">
                    Email<br>
                    <input type="text" name="user_email"><br>
                    Wachtwoord<br>
                    <input type="text" name="user_password"><br>
                    <button>Verzenden</button>
            
                </form>
        </div>
    </div>