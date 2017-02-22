<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom_ville'];

updateVille($id, $nom);

header("Location: index.php");
