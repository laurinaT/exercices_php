<?php
session_start();

if(!isset($_SESSION["first_name"])) {
    header("Location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="m-5 justify-center"> Bonjour  <?php echo $_SESSION["first_name"]?> !!! Et bienvenue sur votre espace personnel !</h1>
    <a href="logout.php">Déconnexion</a>
</body>
</html>