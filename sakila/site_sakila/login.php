<?php
	session_start();
    require 'loginView.php';
	try {
		$db = new PDO('mysql:host=localhost;dbname=sakila', "root", "");
	} catch (\Exception $e) {
		echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
		die();
	}

	// On prepare la requête dans la table staff
	$sqlQuery = 'SELECT staff.first_name, staff.email, staff.password, address.address, address.district FROM `staff`
    INNER JOIN store ON staff.store_id=store.store_id
    INNER JOIN address ON store.address_id=address.address_id
    WHERE email=:email';
    $db->bindValue(':email', $email, PDO::PARAM_STR);

	$staffStatement = $db->prepare($sqlQuery);
	$staffStatement->execute();

	$staffs = $staffStatement->fetch();

	// Validation du formulaire
	if (isset($_POST['email']) && isset($_POST['password'])) {
		foreach ($staffs as $staff) {
			if ($staff['email'] === $_POST['email'] && $staff['password'] === $_POST['password'] ) {
				$_SESSION['first_name'] = $staff['first_name'];
                //$_SESSION['first_name'] = $staff['first_name'];
				header("Location: home.php"); 
				exit();
			}
		}
		header("Location: login.php"); 
		exit();
	}
?>