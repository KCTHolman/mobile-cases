<?php
    include 'php-includes/db-connection.php';

if ($_SESSION['role'] == 'admin'){
    echo '<a class="nav-item" href="../../index.php">Admin pagina</a>';
}
 else { 
    echo '<p></p>';

}

?>