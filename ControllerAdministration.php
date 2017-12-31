<?php

session_start();
include 'Modele.php';

$reservation = unserialize($_SESSION['reservation']); 
$_SESSION['reservation_details']="";
$_SESSION['passengers2_details']="";


if (isset($_POST['Modification']))
{	
	try
	{
		// db connexion
		$bdd = new PDO('mysql:host=localhost;dbname=appli_reservation;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		// error
        die('Erreur : '.$e->getMessage());
	}
	
	
	//getting my reservation and the passenger associated with
	$reponse = $bdd->prepare('SELECT `id`, `destination`, `annulation`, `places` FROM reservation WHERE id= :id_reservation2');
	
	$reponse->bindParam(':id_reservation2' ,$_SESSION['id_reservation2']);
	
	$reponse->execute();
	
	while ($donnees = $reponse->fetch())
	{
		$_SESSION['reservation_details'] = '<p>
				<strong>Destination:</strong> :'. $donnees['destination'].'<br />
				Assurance annulation: '.$donnees['annulation'].'<br />
				Nombres de voyageurs :'. $donnees['places'].'<br />
				</em>
				</p>' ;	
	}

	$reponse->closeCursor(); 
	
	
	
	$reponse2 = $bdd->prepare('SELECT * FROM passager WHERE Id_reservation= :id_reservation2');
	$reponse2->bindParam(':id_reservation2' ,$_SESSION['id_reservation2']);
	$reponse2->execute();
	
	while ($donnees = $reponse2->fetch())
	{
		$_SESSION['passengers2_details'] .= '<tr>
			<td> '.$donnees['id'].'
           <td>'. $donnees['lastname'].'</td>
           <td>'.$donnees['firstname'].'</td>
           <td>'. $donnees['age'].'</td>
		   <td><form method="Post" action="ControllerAdministration2.php" />
					
					<input type="submit" value="Editer" name="editingPassenger"/>
			</form>
			<td><form method="Post" action="ControllerAdministration2.php" />
					
					<input type="submit" value="Supprimer" name="deletePassenger"/>
			</form>
		</tr>'	;				
	}

	$reponse2->closeCursor();
	
	$_SESSION['reservation'] = serialize($reservation);
	
	include 'Administration.php';
	
}

//for deleting a reservation
if (isset($_POST['DeleteReservation']))
{	
	try
	{
		
		$bdd = new PDO('mysql:host=localhost;dbname=appli_reservation;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		
        die('Erreur : '.$e->getMessage());
	}
	
	
	//Delete reservation and passengers associated with
	$reponse = $bdd->prepare('DELETE FROM `reservation` WHERE id = :id_reservation2');
	
	$reponse->bindParam(':id_reservation2' ,$_SESSION['id_reservation2']);
	
	$reponse->execute();
	
	$reponse->closeCursor(); 
	
	
	
	$reponse2 = $bdd->prepare('DELETE FROM `passager` WHERE Id_reservation= :id_reservation2');
	
	$reponse2->bindParam(':id_reservation2' ,$_SESSION['id_reservation2']);
	
	$reponse2->execute();
	
	$reponse2->closeCursor(); 
	
	include 'DeletedReservation.php';
	
}

//for updating a reservation
if (isset($_POST['EditReservation']))
{	
	include 'VueAcceuil.php';
	
}
?>