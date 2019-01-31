<?php
    include '../../php-includes/db-connection.php';
    session_start();
   
        $user_email = $_GET['user_email'];
        $user_password = $_GET['user_password'];

   
    $result = "SELECT user_names, user_role
               FROM users
               WHERE user_email = '$user_email' 
               AND user_password = '$user_password'";
    
    $db_result = $conn->query($result);
    
    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $name = $row['user_names'];
            $role = $row['user_role'];
        }
        

        $_SESSION['user'] = $name;
        $_SESSION['role'] = $role;
        header("location:/mobile-cases/index.php");
    }
    else 
    {
        echo 'The username or password is incorrect!';

    }
?>