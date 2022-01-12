<?php
session_start();

if(!isset($_SESSION["first_name"])) {
    header("Location:login.php");
    exit;
}

echo 'coucou';
echo '<h1 class="m-5 justify-center"> Bonjour ' . $_SESSION['first_name'] . '!!! Et bienvenue sur votre espace personnel !</h1>';