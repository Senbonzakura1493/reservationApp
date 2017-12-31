<html>
	<head>
		<link rel = "stylesheet" href=" style.css"/> 
	</head>
 
	<body>
		<div id = "global">
		<h1>Récapitulatif Reservation</h1>
		<p> La destination choisie est  <?php echo $reservation->GetDestination(); ?>
		<p> Vous avez réservé  <?php echo $reservation->GetPlaces(); ?> places </p>
		<?php if ($reservation->GetInsurance() == "Oui" )
				{
					echo ('Vous avez pris une assurance annulation, celle ci couvrira tous les passagers');
				}
				else 
				{
					echo ('Vous prenez aucune assurance annulation');
				} ?> 
		<p> Coordonnées des passagers: </br>
		
		<p> <?php echo $_SESSION['passenger_details']; ?>
		
		<p> 
		<div id="contenu" ><form method="Post" action="ControllerConfirmation.php" />
					
					<input type="reset"  value="annuler la réservation"/>
					<input type="submit" value="Confirmation de la réservation" name="Confirmation"/>
					
				</form>	
		</div>
		
		
	</body>
</html> 