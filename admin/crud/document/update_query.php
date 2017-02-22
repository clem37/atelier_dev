<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$admin = $_POST['admin'];

updateUser($id, $nom, $prenom, $mail, $admin);

if ($admin == 0) : 
    header("Location: ../../index.php");
endif;

header("Location: index.php");
