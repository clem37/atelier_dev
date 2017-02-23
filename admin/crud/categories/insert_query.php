<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($image_tmp, '../../../uploads/' . $image);
$nom = $_POST['nom_categorie'];
$description = $_POST['description'];


insertCategorie($nom, $description, $image);

header("Location: index.php");
