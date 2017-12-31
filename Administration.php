

<html>

	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css"/>
		<title>Modification réservation </title>
	</head>
	
	<body>
	<div id="global" >
			<header>
			<h1 id="titresite" >Modification de la réservation </h1></a>
			
			</header>
			
			
			<p> Désirez-vous modifier votre réservation ? </p>
			
			<h2 > Information réservation </h2>
			
			<p> <?php echo $_SESSION['reservation_details']; ?> </p>
			
			<form method="Post" action="ControllerAdministration.php" />
					
					<input type="submit" value="Editer" name="EditReservation"/>
			</form>
			
			<form method="Post" action="ControllerAdministration.php" />
					
					<input type="submit" value="supression " name="DeleteReservation"/>
			</form>
			<p> <p>
			
			
			
			<table border="1">
   <caption>Passagers du vol</caption>

   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Nom</th>
           <th>Prenom</th>
           <th>Age</th>
		   <th>Edition</th>
		   <th>Supression</th>
       </tr>
   </thead>

   <tfoot> <!-- Pied de tableau -->
       <tr>
           <th>Nom</th>
           <th>Prenom</th>
           <th>Age</th>
		   <th>Edition</th>
		   <th>Supression</th>
       </tr>
   </tfoot>

   <tbody> <!-- Corps du tableau -->
       <?php echo $_SESSION['passengers2_details'];?>
   </tbody>
</table>
			
			
			
			
			
			
	</div>	<!--#global-->
			
			
	
	
	
	</body>
	


</html>
