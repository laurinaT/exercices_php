<?php
// Page qui gère la déconnexion 
session_start();
if(isset($_SESSION["first_name"])) {
    // Vide et détruit toutes les informations en session
    session_unset();
    session_destroy();
    header("Location: login.php");
     }
    // Redirige sur login
?>