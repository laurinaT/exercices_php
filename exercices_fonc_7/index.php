<?php


    function park_open($saisie){

        if (($handle = fopen("villes_france.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            }
        }        
    }    
