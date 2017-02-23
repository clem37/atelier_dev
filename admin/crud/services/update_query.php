<?php

require_once '../../security.php';
require_once '../../../model/database.php';


$picto = $_FILES['picto']['name'];
$picto_tmp = $_FILES['picto']['tmp_name'];

move_uploaded_file($picto_tmp, '../../../uploads/' . $picto);

$id = $_POST['id'];
$nom = $_POST['nom'];
$description = $_POST['description'];


updateServices($id, $nom, $description, $picto);

header("Location: index.php");
