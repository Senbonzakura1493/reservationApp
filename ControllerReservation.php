
<?php
	session_start();

	require 'modele.php' ; 
	
	if (isset($_POST['valider'])) 
	{
		
		if ($_SESSION['Edit_Reservation']== 1)
		{
		// création d'une nouvelle reservation
		$price = 0;
		$dateTime = date('d-m-Y H:i:s');
		
		
		$reservation = New Reservation($_POST['destination'],$_POST['places'],$_POST['insurance'],$price,$dateTime,array()) ;
		
		$_SESSION['reservation'] =serialize( $reservation ) ;
		
		
		include 'VuePassager.php';
		}
		
		if ($_SESSION['Edit_Reservation'] > 1)
		{
			try
			{
		
				$bdd = new PDO('mysql:host=localhost;dbname=appli_reservation;charset=utf8', 'root', '');
			}
			catch(Exception $e)
			{
		
			die('Erreur : '.$e->getMessage());
			}
	
			
			$reponse2 = $bdd->prepare('UPDATE `reservation` SET `destination`= :destination,`annulation`=:annulation,`places`=:places WHERE id = :id_reservation2');
	
			$reponse2->bindParam(':id_reservation2' ,$_SESSION['id_reservation2']);
			$reponse2->bindParam(':destination' ,$_POST['destination']);
			$reponse2->bindParam(':annulation' ,$_POST['insurance']);
			$reponse2->bindParam(':places' ,$_POST['places']);
	
			$reponse2->execute();
	
			$reponse2->closeCursor(); 
	
			include 'EditingReservation.php';
		}
		
		
	}
		
	else 
	{
		echo 'Une erreur est survenue lors du chargement de la page, veuillez réessayer' ;
	}
	
	
?>
	


