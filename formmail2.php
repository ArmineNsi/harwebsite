<?php
/* Remplacer votre_adresse@mail.net par votre adresse mail
   Remplacer www.votre_domaine.net par votre nom de domaine */

$adresse = "webezmoi@gmail.com";
$site = "webez-moi.com/";

$TO = $adresse;

$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";

$sujet = "Formulaire de contact";

$informations = "
Nom: ".$_POST['nom']." \r\n
Email : ".$_POST['email']." \r\n
Numero de tel : ".$_POST['telephone']." \r\n
Objet : ".$_POST['objet']."\r\n
Message: ".$_POST['message']." \r\n
";

$res = mail($TO, $sujet ,$informations, $head);

if (true == $res) {
Header("Location: http://".$site."/formail2_ok.html" );
} else {
Header("Location: http://".$site."/formail2_pasok.html" );
}
?>



