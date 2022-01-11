<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
  <div class="form">
    <label for="entry">Veuillez entrer votre numéro de sécurité sociale : </label>
    <input type="text" name="entry" id="entry" required>
    <button type="submit" name="submit">Press ME !</button>
  </div>
</form>
</body>
</html>

<?php

if (isset($_POST["entry"])){
    $NumSec = $_POST["entry"];
    if(preg_match("#^[123789][0-9]{2}[0-1][0-9](2[AB]|[0-9]{2})[0-9]{3}[0-9]{3}[0-9]{2}$#",$NumSec)) {
      echo "Votre numéro est valide !";
    }
    else
    {
      echo "Votre numéro n'est pas valide !<br>";
    }
}