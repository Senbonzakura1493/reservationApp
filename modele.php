<?php 
	
class Reservation 
	{
		private $arrayPassengers = array(); // tableau des passagers liés à une réservation.
		private $destination;
		private $places;	
		private $insurance;
		private $price;
		protected $dateTime;
		
		//Constructor
		public function __construct($myDestination, $myPlaces, $myInsurance, $myPrice,$myDate,$myPassengers)
		{
			$this->arrayPassengers = $myPassengers;
			$this->destination= $myDestination;
			$this->places = $myPlaces;
			$this->insurance = $myInsurance;
			$this->price = $myPrice;
			$this->dateTime = $myDate;
		}
		
		// Get and Set Functions
		public function GetDestination()
		{
			return $this->destination;
		}
		public function GetPlaces()
		{
			return $this->places;
		}
		
		public function GetInsurance()
		{
			return $this->insurance;
		}
		
		public function GetArrayPassengers()
		{
			return $this->arrayPassengers;
		}
		
		public function GetPrice()
		{
			return $this->price;
		}
		
		public function GetDateTime()
		{
			return $this->dateTime;
		}
		
		public function SetDestination($destination)
		{
			$this->destination = $destination;
		}
		public function SetPlaces($places)
		{
			$this->places = $places;
		}
		
		public function SetInsurance($insurance)
		{
			$this->insurance = $insurance;
		}
		
		
		public function CountPassengers()
		{
			return count($this->arrayPassengers);
		}
		
		//public function SetPrice()
		//{
			//return this->price;
		//}
		
		public function SetDateTime()
		{
			return $this->dateTime = date('d-m-Y H:i:s') ;
		}
		
		// gestion des passagers liés à une réservation.
		public function AddPassengerToReservation($passenger)
		{
			array_push($this->arrayPassengers ,$passenger);

		}
		
		
		
	}

	
class Passenger
{
		
		private $lastname;
		private $firstname;
		private $age;
		
		
		
		//Constructor
		public function __construct($mylastname, $myfirstname, $myAge)
		{
			$this->lastname= $mylastname;
			$this->firstname = $myfirstname;
			$this->age = $myAge;
			
		}		
		
		
		public function GetLastname()
		{
			return $this->lastname;	
		}
		
		public function GetFirstname()
		{
			return $this->firstname;
		}
		public function GetAge()
		{
			return $this->age;	
		}
		
		public function SetLastname($lastname)
		{
			$this->lastname = $lastname;	
		}
		public function SetFirstname($firstname)
		{
			$this->firstname = $firstname;
		}
		public function SetAge($age)
		{
			$this->age = $age;
		}
		
		
}


	
?>