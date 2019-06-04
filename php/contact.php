<?php
$destinataire = "romain.penchenat@gmail.com";
$subject = "Contact depuis le site";
$message = "Nouveau message de ".$_POST["name"]." ( ".$_POST["company"]." - ".$_POST["email"]." )\r\n\r\n".$_POST["message"];
$headers = 'From: contact@eosecurite.com'." \r\n" .
    'Reply-To: '.$_POST["email"] . " \r\n" .
    'X-Mailer: PHP/' . phpversion();
if (mail($destinataire,$subject,$message,$headers)) {
    header("Location : /contactvalidation");
} else {
    header("Location : /contact");
}