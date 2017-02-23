<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$doc = $_FILES['fichier']['name'];
$doc_tmp = $_FILES['fichier']['tmp_name'];

move_uploaded_file($doc_tmp, '../../../uploads/' . $doc);
$nom = $_POST['nom_document'];


insertDocument($nom, $doc);

header("Location: index.php");
