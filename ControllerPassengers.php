<?php
	session_start(); // ouverture session.
	
	include "modele.php";
	
	$reservation = unserialize($_SESSION['reservation']);
	
	if (isset($_POST['valider2'])) //si je demande à ajouter un passager
	{	
		
		if($reservation->countPassengers() < $reservation->GetPlaces())
			{	
				// création de mon objet passager.
				$passenger = New Passenger($_POST['lastname'],$_POST['firstname'],$_POST['age']) ;
		
				//ajout de mon objet passager à mon tableau de passager
				
				$reservation->AddPassengerToReservation($passenger); // J'ajoute une entré a mon array passengers
			
				$_SESSION['reservation'] = serialize($reservation);
				
				if ( $reservation->countPassengers()< $reservation->GetPlaces())
				{	
					$_SESSION['nb_passengers']=$reservation->countPassengers()+1;
					include 'VuePassager.php';
				}
				
				else 
			
				{
					include 'ControllerValidation.php';
					
				}
			}	
		
	}
		
		
		
	
	
?>
	

 
 

