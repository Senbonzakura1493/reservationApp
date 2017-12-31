<?php

	$reservation = unserialize($_SESSION['reservation']);
	
	$_SESSION['passenger_details']="";
	
	//verifier que la vue validation éxiste
	if (!file_exists('VueValidation.php'))
	{
		die ('fichier VueValidation non trouvé');	
	}
	else 
	{
		foreach ($reservation->GetArrayPassengers() as $details ) 
		{
			$_SESSION['passenger_details'].= $details->GetFirstname()." " .$details->GetLastname(). " " .$details->GetAge() . "</br>";
		}
		
		include 'VueValidation.php';
		$_SESSION['reservation']= serialize($reservation); //serialisation
			
		
	}
	
?>
