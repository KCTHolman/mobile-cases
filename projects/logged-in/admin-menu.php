<?php
    include 'php-includes/db-connection.php';


if (isset($_SESSION['role'])){
    if ($_SESSION['role'] == 'admin'){
        echo '<a class="nav-item" href="projects/admin-page/admin-page-page.php">Admin pagina</a>';
    }
     else { 
        echo "<p></p>";
    
    }
}
else{
    echo "<p></p>";
}

?>