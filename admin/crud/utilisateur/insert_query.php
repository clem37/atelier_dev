<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom_utilisateur'];
$prenom = $_POST['prenom_utilisateur'];
$mail = $_POST['mail_utilisateur'];
$mot_de_passe = $_POST['mot_de_passe'];
$admin = $_POST['administrateur'];

insertUser($nom, $prenom, $mail, $mot_de_passe, $admin);

header("Location: index.php");