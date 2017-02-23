<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$mail_content = "Vous avez reçu un mail depuis votre formulaire de contact.<br>";
$mail_content .= "Nom : " . $nom;
$mail_content .= "Prénom : " . $prenom;
$mail_content .= "Mail : " . $mail;
$mail_content .= "Message : " . $message;


mail("clem.chassaing@gmail.com", "Formulaire de contact", $mail_content);
