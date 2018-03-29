<?php 
//Properties: Author, Message, Display-date, Expiration-date
//Methods: Set/Get Author, Set/Get Message, Set/Get Display-date, Set/Get Expiration-date, displayNotice().

	class notice {
		public $author = "";
		public $message = "";
		public $displayDate = "";
		public $expirationDate = "";
		
			function setName($inFirstName, $inLastName) {
			$this->firstName = $inFirstName;
			$this->lastName = $inLastName;
			$this->author = $this->firstName." ".$this->lastName;
			}
			
			function setDisplayDate($inMonth, $inDay, $inYear) {
				$this->displayDate = "Recieved on: " . date("F j,Y",mktime(0,0,0,$inMonth,$inDay,$inYear));
				$this->Month = $inMonth;
				$this->Day = $inDay;
				$this->Year = $inYear;
			}
			
			function setMessage ($inMessage) {
				$this->message = $inMessage;
			}

			function setExpirationDate() {
				$this->expirationDate = date("F j,Y",mktime(0,0,0,11,17,2015));
			}

			
			function getAuthor() {
			return $this->author;
			}
			
			function getDisplayDate() {
				return $this->displayDate;
			}
			
			function getMessage() {
				return $this->message;
			}
			
			function getExpirationDate() {
				return $this->expirationDate;
			}
			
			function displayNotice(){
			$displayString = "Name: " . $this->getAuthor(). "\n" .$this->getDisplayDate(). "\n" .$this->getMessage(). "\n" .$this->getExpirationDate();
			echo nl2br($displayString);
			}
	
	
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>