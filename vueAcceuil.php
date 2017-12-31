
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css"/>
		<title>Nouvelle Reservation</title>
	</head>
	
	<body>
	<div id="global" >
			<header>
			<a href="vue.php"><h1 id="titresite" >Mon site de réservation</h1></a>
			<p> Le prix de la place est de 10 euros jusqu'à 12 ans et ensuite de 15 euros.<br/>
			Le prix de l'assurance annulation est de 20 euros quelque soit le nombre de voyageurs <p>
			</header>
			<div id="contenu" ><form method="Post" action="ControllerReservation.php">
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
							<select name="insurance" required>
							<option>Oui</option>
							<option>Non</option>
							</select>
							</br>
					</fieldset>		
					
					<input type="reset"  value="annuler la réservation"/>
					<input type="submit" value="étape suivante" name="valider"/>
			</div> <!-- #contenu -->
			</form>
			
	</div>	<!--#global-->
			
	
	
	
	</body>
</html>	
