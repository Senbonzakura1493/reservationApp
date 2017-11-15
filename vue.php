
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>Nouvelle Reservation</title>
	</head>
	
	<body>
			<h1>Nouvelle Reservation</h1>
			<p> Le prix de la place est de 10 euros jusqu'à 12 ans et ensuite de 15 euros.<br/>
			Le prix de l'assurance annulation est de 20 euros quelque soit le nombre de voyageurs <p>
			<form method="Post" action="cible2.php">
					<fieldset>
						<legend>Votre recherche</legend>
						<label> Destination</label> 
						<select name="destination" required >
							<option>Berlin</option>
							<option>Bruxelles</option>
							<option>Marrakech</option>
						</select></br>
						<label> Nombre de places</label>
							<input name="places" type="text" required /></br>
						<label>Assurance annulation</label>
							<input type="checkbox" name="assurance"/></br>
					</fieldset>		
					
					<input type="reset"  value="annuler la réservation"/>
					<input type="submit" value="étape suivante" name="valider"/>
			</form>
			
			
	
	
	
	</body>
	
