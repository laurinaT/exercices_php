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
    <label for="entry">Veuillez entrer votre date de naissance : </label>
    <input type="text" name="entry" id="entry" required>
    <button type="submit" name="submit">Press ME !</button>
  </div>
</form>
</body>
</html>

<?php
if (isset($_POST['entry'])) {
    function getAge() {
        $entry = htmlspecialchars($_POST['entry']);
        $arrayEntry = explode('/',$entry);
        $entryDay = $arrayEntry[0];
        $entryMonth = $arrayEntry[1];
        $entryYear = $arrayEntry[2];
    
        $year_diff  = date("Y") - $entryYear;
        $month_diff = date("m") - $entryMonth;
        $day_diff   = date("d") - $entryDay;
    
        if ($day_diff < 0 && $month_diff==0) $year_diff--;
        if ($day_diff < 0 && $month_diff < 0) $year_diff--;
        echo "Votre âge est de " .$year_diff . " ans !";
    }
    getAge();
}
    
    
?>