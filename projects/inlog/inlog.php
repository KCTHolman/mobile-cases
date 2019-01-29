<?php
    include '../../php-includes/db-connection.php';
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="inlog.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Inlog</title>
</head>

<body>
    <div class="container-inlog">
        <div class="form-create-account">
            <form action="formHandler.php" method="get">
                    Voor en -achternaam<br>
                    <input type="text" name="user_names"><br>
                    Postcode<br>
                    <input type="text" name="user_postalcode"><br>
                    Straatnaam<br>
                    <input type="text" name="user_streetname"><br>
                    huisnummer<br>
                    <input type="text" name="user_housenumber"><br>
                    Geboortedatum<br>
                    <input type="date" name="user_birthday"><br>
                    Email<br>
                    <input type="text" name="user_email"><br>
                    Wachtwoord<br>
                    <input type="text" name="user_password"><br>
                    <button class=form-button type="submit">Verzend</button>
            </form>
        </div>


    </div>

</body>

</html>