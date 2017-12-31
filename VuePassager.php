<html>
	<head>
		<meta charset="utf-8"/>
		<title>Passager </title>
		<link rel= "stylesheet" href ="style.css">
	</head>
	
	<body>
		<div id= "global">
			<h1>Passager</h1>
			<form method="POST" action="ControllerPassengers.php">
					<fieldset>
						<label> lastname </label>
							<input name="lastname" type="text" required /></br>
						<label> firstname </label>
							<input name="firstname" type="text" required /></br>
						<label> Age </label>
							<input name="age" type="text" required /> </br>
					</fieldset>		
					
					<input type="reset"  value="annuler la réservation"/>
					<input type="submit" value="étape suivante" name="valider2"/>
			</form>
			
		</div>	
	
	
	
	</body>
	
</html>