<?php

$email=$_POST["email"];
$name=$_POST["name"];

$message=$_POST["message"];


// $phone=$_POST["phone"];

$to="homelyfreshfoods@gmail.com"; // Receiver Email ID, Replace with your email ID
			            	$subject='Contact form Submit from customer';
						
                            $headers="From: ".$email;
							 
							 $msg="Name: $name\n\n Email: $email \n\n  \n\n Message: $message \n\n ";
							$retval = mail ($to,$subject,$msg,$headers);
							if($retval == true){
							echo 'success';
								
							}
							else{
							echo 'failed';
								
							}
?>
