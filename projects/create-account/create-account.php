<?php
    include '../../php-includes/db-connection.php';
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="create-account.css" type="text/css" rel="stylesheet">
    <link href="../../index.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">


    <title>Inlog</title>
</head>

<body>
<?php include "../navbar/navbar-later-folder.php"; ?>
    <div class="container-login">
        <div class="box3-title-form"> Maak uw account aan</div>
        <div class="box4-form-create-account">
            <form action="formHandler.php" method="GET">
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
                <div class="button-row"> <button class=form-button type="submit">Verzend</button>
                    Al een account? <a href="">log in</a></div>
            </form>
        </div>
    </div>
</div>


    </div>


    </div>

</body>

</html>