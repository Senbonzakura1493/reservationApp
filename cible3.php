<?php
	session_start();
	if (isset($_POST['valider2'])){
	
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$age=$_POST['age'];	
	}
	$_SESSION ['nom']= $nom;
	$_SESSION ['prenom']= $prenom;
	$_SESSION ['age']= $age;
	
	class passenger {
		
		
		 
	}
?>
	
<html>
 
	<body>
		<h1>Validation Reservation</h1>
		<p> La destination choisie est  <?php echo ($_SESSION ['destination']); ?> </p>
		<p> Vous avez réservé  <?php echo ($_SESSION['places']); ?> places </p>
		<p> Vos coordonnées : </br>
			Passager Principal</br>
			Nom:	<?php echo ($nom); ?> </br>
			Prenom:	<?php echo ($prenom); ?></br>
			Age:	<?php echo ($age); ?> </br>	
		</p>
		
	
	</body>
</html> 
 
 

