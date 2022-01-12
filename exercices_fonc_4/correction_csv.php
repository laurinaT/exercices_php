<?php
	function searchDpt($dpt) {
		
		if (($handle = fopen("departement.csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				if ($data[1]==$dpt) {
					return $data[2];
				}
			}
			fclose($handle);
		}
	}
	$saisie =readline();
	print searchDpt($saisie);
?>