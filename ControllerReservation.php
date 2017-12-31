
<?php
	session_start();

	require 'modele.php' ; 
	
	
	if (isset($_POST['valider'])) // si je valide la réservation
	{

		// création d'une nouvelle reservation
		$price = 0;
		$dateTime = date('d-m-Y H:i:s');
		
		
		$reservation = New Reservation($_POST['destination'],$_POST['places'],$_POST['insurance'],$price,$dateTime,array()) ;
		
		$_SESSION['reservation'] =serialize( $reservation ) ;
		
		
		include 'VuePassager.php';
		
		
		
	}
		
	else 
	{
		echo 'Une erreur est survenue lors du chargement de la page, veuillez réessayer' ;
	}
	
	
?>
	


