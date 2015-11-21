<?php

$cName=$_POST['c_name'];
	$cEmail=$_POST['c_email'];
	$cMessage=$_POST['c_message'];

	mysql_connect("www.grantmukai.com:4579", "cv_access", "jenesaispasmaistuverras") or die(mysql_error());
	mysql_select_db("contactform") or die(mysql_error());
	mysql_query("INSERT INTO `contactform` VALUES ('$cName', '$cEmail', '$cMessage','TESTL')");
	echo "<h1>Message Transmis</h1>";
	
	$to = 'grantmukai@icloud.com';
    $subject = 'Nouvelle Soumission du formulaire!';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message'])){
   		$name    = $_POST['c_name'];
    	$from    = $_POST['c_email'];
    	$message = $_POST['c_message'];

		if (mail($to, $subject, $message, $from)) { 
			$result = array(
				'message' => "Thanks for contacting us! Merci de m'avoir contact&eacute;!",
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else { 
			$result = array(
				'message' => "Sorry, something is wrong. D&eacute;sol&eacute;, il y a quelque chose de pas correct.",
				'sendstatus' => 1
				);
			echo json_encode($result);
		} 
	}

?>