<?php
if (isset($_SESSION['user'])){
    echo "Welkom ". $_SESSION['user'];
}
else{
    echo "Inloggen";
}

?>