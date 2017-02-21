<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom_service'];
$description = $_POST['description_service'];
$picto = $_POST['picto_service'];

insertService($nom, $description, $picto);

header("Location: index.php");