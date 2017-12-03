<?php
	session_start(); // création de ma session 
	if (isset($_POST['valider2'])){
	
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$age=$_POST['age'];	
	}
	
	//création des variables de session 
	
	$_SESSION ['nom']= $nom;
	$_SESSION ['prenom']= $prenom;
	$_SESSION ['age']= $age;
	
	// création de ma classe passager : objet ayant un nom, un prenom , un age , une destination , une assurance.
	class passenger {
		//création de mes variables d'instance 
		
		//création de mes methodes me permettant de récuperer mes différentes variables. 
		
		 
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
 
 

