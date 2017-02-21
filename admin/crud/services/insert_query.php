<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$picto = $_FILES['picto_service']['name'];
$picto_tmp = $_FILES['picto_service']['tmp_name'];

move_uploaded_file($picto_tmp, '../../../uploads/' . $picto);
$nom = $_POST['nom_service'];
$description = $_POST['description_service'];


insertService($nom, $description, $picto);

header("Location: index.php");