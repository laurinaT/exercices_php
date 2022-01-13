<?php

require_once("DAOPays.php");

// on crée une nouvelle instance */
$dao=new DAOPays();

//on se connecte
$dao->connexion();

if (!$dao->getLastError()) {
	
	//on récupère tous les pays et on les affiche
	print_r($dao->getCountries("Afrique"));
	
	print_r($dao->getContinents());
	
	//print_r($dao->getUtilisateurs("admin"));
}

foreach($dao->getContinents() as $value) {
		print $value["libelle_continent"]."<br>";
}

?>