<?php
		
	function age($birthdate) {
		
		
		$diff=time()-strtotime($birthdate);
		return (int)($diff/(365.25*24*3600));
			
	}
	
	function age2($birthdate) {
		$now=new Datetime("now");
		$date = DateTime::createFromFormat('Y-m-d', $birthdate);
		$interval = $now->diff($date);
		return $interval->format('%y');
	}
	
	$birthdate="";
	$age="";
	if (isset($_POST["birthdate"])) {
		$birthdate=$_POST["birthdate"];
		$age= age2($_POST["birthdate"]);
		
		
		header("location:affichage.php");
	}

	
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method="post">
			<input type="date" name="birthdate" value="<?php echo $birthdate;?>" required>
			
			<button type="submit">Envoyer</button>
			<input type="submit" value="Envoyer">
		</form>
		<?php 
		
			print $age;
			
		?>
	</body>
</html>



