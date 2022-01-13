<?php 
	require_once("Voiture.php");
	
	$voiture1=new Voiture("DS3","Citroën","Diesel",165000);
	
	$voiture2=new Voiture("Testarossa","Ferrari","Essence",10000);
	
	$voiture2->rouler(200);
	
	print $voiture2->getNb_kms();
	
	
	
?>