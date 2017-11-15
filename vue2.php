<?php

session_start();

?>


<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Passager{}</title>
	</head>
	
	<body>
			<h1>Passager {}</h1>
			<form method="POST" action="cible.php">
					<fieldset>
						<label> Nom </label>
							<input name="nom" type="text" required /></br>
						<label> Prenom </label>
							<input name="prenom" type="text" required /></br>
						<label> Age </label>
							<input name="age" type="text" required /> </br>
					</fieldset>		
					
					<input type="reset"  value="annuler la réservation"/>
					<input type="submit" value="étape suivante"/>
					<input type="submit" value="étape précédente"/>
					
			</form>
			
			
	
	
	
	</body>
</html>