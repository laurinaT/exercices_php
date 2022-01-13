<?php

class DAOPays {
	
	private $host="localhost";
	private $user="root";
	private $password="";
	private $database="pays";
	private $charset="utf8";
	
	private $bdd;
	
	//stockage de l'erreur éventuelle du serveur mysql
	private $error;
	
	public function __construct() {
	
	}
	
	public function getDatabase() {
			return $this->database;
	}
	
	public function setDatabase($database) {
		$this->database=$database;
	}
	
	/* méthode de connexion à la base de donnée */
	public function connexion() {
		try
		{
			// On se connecte à MySQL
			$this->bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';charset='.$this->charset, $this->user, $this->password);
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
			 $this->error=$e->getMessage();
		}
	}
	
	public function getResults($query) {
		$reponse = $this->bdd->query($query);
		$donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
		$reponse->closeCursor();
		return $donnees;
	}
	
	
	public function getLastError() {
		return $this->error;
	}
	
	public function getCountries($continent="") {
		
		if ($continent) {
			return $this->getResults("SELECT `id_pays`, `libelle_pays`, `population_pays`, `taux_natalite_pays`, `taux_mortalite_pays`, `esperance_vie_pays`, `taux_mortalite_infantile_pays`, `nombre_enfants_par_femme_pays`, `taux_croissance_pays`, `population_plus_65_pays` FROM `t_pays` LEFT JOIN t_continents ON (t_pays.continent_id=t_continents.id_continent) WHERE libelle_continent LIKE '".$continent."'");
		}
		
		
		return $this->getResults("SELECT `id_pays`, `libelle_pays`, `population_pays`, `taux_natalite_pays`, `taux_mortalite_pays`, `esperance_vie_pays`, `taux_mortalite_infantile_pays`, `nombre_enfants_par_femme_pays`, `taux_croissance_pays`, `population_plus_65_pays` FROM `t_pays`");
	}
	
	public function getContinents() {
		return $this->getResults("SELECT `id_continent`, `libelle_continent` FROM `t_continents`");
	}
	
	public function getRegions () {
		return $this->getResults("SELECT `id_region`, `libelle_region` FROM `t_regions`");
	
	}
	
	public function getUtilisateurs($identifiant="") {
		$sql="SELECT * FROM `t_users`";
		if ($identifiant) {
			$sql.=" WHERE identifiant_utilisateur='".$identifiant."'";
		}
		return $this->getResults($sql);
	}

}


?>