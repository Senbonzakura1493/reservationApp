
<?php
	session_start();
	
	class Passenger
	{
		private $_destination;
		private $_places;
		private $_assurance;
		private $_nom;
		private $_prenom;
		private $_age;
		
		
		public function get_name(){
			
			return $this->_nom;
			return $this->_prenom;
			return $this->_age;
		}
		
		public function get_destination(){
			
			return $this->_destination;
		}
		
		public function get_assurance() {
			
			return $this->_assurance;
		}
		public function get_places() {
			
			return $this->_places;
		}
	}
	if (isset($_POST['valider'])){
	
		$destination=$_POST['destination'];
		$places=$_POST['places'];
		$assurance=$_POST['assurance'];		
	}
	
	
		
	 $_SESSION ['destination']= $destination;
	 $_SESSION ['places']=$places;
	 $_SESSION ['assurance']=$assurance;	
	
	
	
?>
	
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Passager 1 </title>
	</head>
	
	<body>
			<h1>Passager {}</h1>
			<form method="POST" action="cible3.php">
					<fieldset>
						<label> Nom </label>
							<input name="nom" type="text" required /></br>
						<label> Prenom </label>
							<input name="prenom" type="text" required /></br>
						<label> Age </label>
							<input name="age" type="text" required /> </br>
					</fieldset>		
					
					<input type="reset"  value="annuler la réservation"/>
					<input type="submit" value="étape suivante" name="valider2"/>
			</form>
			
			
	
	
	
	</body>
	
</html>

