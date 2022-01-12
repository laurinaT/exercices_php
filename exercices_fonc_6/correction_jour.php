<?php

	function jour($date) {
		$jours=array("Monday"=>"Lundi","Tuesday"=>"Mardi","Wednesday"=>"Mercredi","Thursday"=>"Jeudi","Friday"=>"Vendredi","Saturday"=>"Samedi","Sunday"=>"Dimanche");
		$date_temp = DateTime::createFromFormat('d/m/Y', $date);
		
		$jour=$date_temp->format('l');
		return $jours[$jour];
	}
	$saisie=readline();
	print jour($saisie);
?>