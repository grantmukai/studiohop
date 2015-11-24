<?php
	$cName=$_POST['c_name'];
	$cEmail=$_POST['c_email'];
	$cMessage=$_POST['c_message'];
	$cLanguage=$_POST['c_language'];
	
	$contactFormSqli = new mysqli("www.grantmukai.com:4579","cv_access","jenesaispasmaistuverras","contactform");
	
	$envoyerDonnees = "INSERT INTO `contactform` VALUES ('$cName', '$cEmail', '$cMessage','$cLanguage',NOW())";
	$contactFormSqli->query($envoyerDonnees);
	
    if (!mysql_error()) {
        $result = array(
            'message' => "Merci de m'avoir contact&eacute;! <br />Thanks for contacting me!<br /> &iexcl;Gracias por ponerse en contacto conmigo!",
            'sendstatus' => 1
            );
    } else {
        $result = array(
            'message' => "D&eacute;sol&eacute;, il y a quelque chose de pas correct.<br />Sorry, something is wrong.<br />Lo siento, algo no pas&oacute; bien.",
            'sendstatus' => 1
            );
    }
    echo json_encode($result);
	//$contactFormSqli->close();
?>