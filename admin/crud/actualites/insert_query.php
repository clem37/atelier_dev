<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($image_tmp, '../../../uploads/' . $image);

$titre = $_POST['titre'];
$description_courte = $_POST['description_courte'];
$description_longue = $_POST['description_longue'];
$date_creation = $_POST['date_creation'];
$afficher = isset($_POST['afficher']) ? 1 : 0;



insertActualite($titre, $description_courte, $description_longue, $date_creation, $afficher, $image);

header("Location: index.php");
