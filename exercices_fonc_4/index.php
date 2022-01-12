<?php

function findDepartement($dpt){
 
  
  $row = 1;
if (($handle = fopen("departement.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($data[1] == $dpt ) {
            return $data[2];
        }
    }
    fclose($handle);
}
}

findDepartement(35);