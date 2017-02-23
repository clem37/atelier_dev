<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($image_tmp, '../../../uploads/' . $image);


updateCategorie($id, $nom, $description, $image);


header("Location: index.php");
