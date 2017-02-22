<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$admin = $_POST['admin'];

updateUser($id, $nom, $prenom, $mail, $admin);

header("Location: index.php");
