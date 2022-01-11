
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
    <label for="entry">Veuillez entrer un jour de l'année 2022 : </label>
    <input type="text" name="entry" id="entry" required>
    <button type="submit" name="submit">Press ME !</button>
  </div>
</form>
</body>
</html>

<?php

if(isset($_POST['entry'])) {

  $jours_feries_22 = array("1 janvier","18 avril","1er mai","8 mai","26 mai","6 juin","14 juillet","15 août","1 novembre","11 novembre","25 décembre");
  $entry = htmlspecialchars($_POST['entry']);
  strtolower($entry);

  function checkEntry($entry, $jours_feries_22) {

    if (in_array($entry, $jours_feries_22)) {
      echo "Ce jour sera férié !";
    } 
    else 
    {
      echo "Ce jour ne sera pas férié !";
    } 
  }
checkEntry($entry, $jours_feries_22);
} else {
echo "veuillez saisir le champ";   
}

