<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=sakila;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
		
}
print "<pre>";
$query=$bdd->prepare("SELECT * FROM customer");
$query->execute();
$result=$query->fetchAll();
print_r($result);
print "</pre>";