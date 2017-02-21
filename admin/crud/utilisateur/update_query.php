<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];

updateUser($id, $nom, $prenom, $mail);

header("Location: index.php");
