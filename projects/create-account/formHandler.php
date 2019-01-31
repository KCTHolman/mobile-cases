<?php


        $usernames = $_GET["user_names"];
        $postalcode = $_GET["user_postalcode"];
        $streetname = $_GET["user_streetname"];
        $housenumber = $_GET["user_housenumber"];
        $birthday = $_GET["user_birthday"];    
        $email = $_GET["user_email"];
        $user_password = $_GET["user_password"];
           
 
    
        include "../../php-includes/db-connection.php";

        try {
                $sql = "INSERT INTO users (user_names, user_postalcode, user_streetname, user_housenumber,
                 user_birthday, user_email, user_password, user_role)
                VALUES ('$usernames', '$postalcode', '$streetname', '$housenumber', '$birthday' , '$email', '$user_password', 'user')";
                
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    
       header("Location: ../../index.php");  



?>