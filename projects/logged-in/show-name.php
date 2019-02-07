<?php
    include 'php-includes/db-connection.php';

if (isset($_SESSION['user'])){
    echo $_SESSION['user'];
}
else{
    echo "";
}


?>


