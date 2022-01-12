<?php
function showVille($dpt){

    if (($handle = fopen("villes_france.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
           
            if($data[1] == $dpt) {
                print($data[3]);
            } 
        }
        fclose($handle);      
    }
}
$dpt =readline();
print showVille($dpt);
