<?php

session_start();
include 'Modele.php';

$reservation = unserialize($_SESSION['reservation']); // deserialisation de mon string


if (isset($_POST['Confirmation']))
{	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=appli_reservation;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	
	//enregistrement de la réservation
	$id=Null;
	$destination=$reservation->GetDestination();
	$annulation=$reservation->GetInsurance();
	$places=$reservation->GetPlaces();
	
	//prepare the query
	$req = $bdd->prepare('INSERT INTO `reservation` (`id`, `destination`, `annulation`, `places`) VALUES (?, ?, ?, ?)');
	
	//execution and binding parameters to the prepared request
	$req->execute(array(
							$id,
							$destination,
						    $annulation,
							$places,
							
						)
					);
	$req->closeCursor();
	
	//récupération de l'id de la réservation
	$id_reservation2 = $bdd->lastInsertId();
	
	$_SESSION['id_reservation2']=$id_reservation2;
	//enregistrement des passagers
	
	//prepare the query2 , insertion d'un passager
	$req2 = $bdd->prepare('INSERT INTO `passager` (`id`,`Id_reservation`, `lastname`, `firstname`, `age`) VALUES (?, ?, ?, ?,?)');
	
	//pour chaque passager dans le tableau des passagers ,l'ajouter au tableau passager
	foreach ($reservation->GetArrayPassengers() as $details )
	{
		$id2=Null;
		$id_reservation= $id_reservation2;
		$lastname=$details->GetLastname();
		$firstname=$details->GetFirstname();
		$age=$details->GetAge();
		
		//execution and binding parameters to the prepared request
		$req2->execute(array(
							$id2,
							$id_reservation2,
							$lastname,
						    $firstname,
							$age,
							
						)
					);
		$req2->closeCursor();
	}
	
	
	
	include 'vueConfirmation.php';
	
	
	
}


?>