<?php 
    session_start();
    unset($_SESSION['site_role']);
    unset($_SESSION['userLogged']);
    session_destroy();
    header('location: pocetna.php');
?>