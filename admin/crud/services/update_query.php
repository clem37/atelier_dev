<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$description = $_POST['description'];
$picto = $_POST['picto'];

updateServices($id, $nom, $description, $picto);

header("Location: index.php");
