<?php	//Use the example by itself to use the mail code. So we can make sure it works and we can copy fields over.
		class Email {
			public $sendTo = "";
			public $sentFrom = "";
			public $emailMsg = "";
			public $emailSubject = "";
			
				function setSendTo ($toName)
				{
					$this->sendTo=$toName;
                    global $inFname, $validForm, $fNameErrMsg;
                    $fNameErrMsg = "";
    
                    if($inFname=="")
                {
                            $validForm = false;
                            $fNameErrMsg = "First Name Required.";
                }
                    else if(preg_match('/[^A-Za-z\s]+$/',$inFname))
                {
                            $validForm = false;
                            $fNameErrMsg = "Please use letters only.";
                }
                }
				}
				
				function setSentFrom ($fromName)
				{
					$this->sentFrom= "From: ".$fromName;
				}
				
			    function setEmailMsg ($inMessage)
				{
					$inMessage = htmlentities($inMessage); //Stops hackers from injection attacking by changing html codes to alt codes.
					$inMessage = wordwrap($inMessage,70,"\n"); //Sentences shouldnt be longer than 70 char, break after 70.
					$this->emailMsg=$inMessage;
				}
				
				function setEmailSubject ($inSubject)
				{
					$this->setEmailSubject=$inSubject;   
				}
				
				function getSendTo ()
				{
					return $sendTo;
				}
				
				function getSentFrom ()
				{
					return $sentFrom;
				}
				
				function getEmailMessage ()
				{
					return $inMessage;
				}
				
				function getEmailSubject ()
				{
					return $inSubject;
				}
				
				//Make another Class Email
				
				
				
				//return mail($toName, $inSubject, $inMessage, $headers); //You'd have to put the if statement into the process with this method.
				//This allows the person who controls the process form to change the output messages and what to do if it fails.
				
				//$msg = wordwrap($msg, 30); /n line break.
				
				function sendMail(){
				if (	mail ($this->sendTo,$this->emailSubject,$this->emailMsg,$this->sentFrom))
				{
					return "Thank you! Your email has been sent!";
				}
				else
				{
					return "Something went wrong! :(";
				}										
				}
		}
?>