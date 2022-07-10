<?php

$adresse = "arminensi@hotmail.com";

$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";

$sujet = "Formulaire de contact";

$informations = "
Nom: ".$_POST['name']." \r\n
Email : ".$_POST['email']." \r\n
Numero de tel : ".$_POST['phone']." \r\n
";

$res = mail($adresse, $sujet ,$informations, $head);

if (true == $res) {
	echo "Thank you for your message, we will reply as soon as possible";
} else {
	echo "An error has occurred. If the problem persists, please contact the webmaster (harwebsite@gmail.com).";
}
?>



