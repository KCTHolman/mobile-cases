<?php
    include 'php-includes/db-connection.php';

if ($_SESSION['role'] == 'admin'){
    echo '<a class="nav-item" href="projects/admin-page/admin-page-page.php">Admin pagina</a>';
}
 else { 
    echo '<p></p>';

}

?>