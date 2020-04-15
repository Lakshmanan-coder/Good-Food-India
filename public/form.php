<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$plan=$_POST["plan"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$fromdate=$_POST["fromdate"];
$todate=$_POST["todate"];
$duration=$_POST["duration"];
// $phone=$_POST["phone"];

$to="praveenrambalu@gmail.com"; // Receiver Email ID, Replace with your email ID
			            	$subject='Subscription Form Submit from customer';
						
                            $headers="From: ".$email;
							 
							 $msg="Name : $name \n\n Email: $email \n\n Phone: $phone \n\n Subscription Plan: $plan \n\n From Date: $fromdate \n\n Duration: $duration\n\n To Date: $todate\n\n City: $city \n\n State: $state";
							$retval = mail ($to,$subject,$msg,$headers);
							if($retval == true){
							echo 'success';
								
							}
							else{
							echo 'failed';
								
							}
?>
