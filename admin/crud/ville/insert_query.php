<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom_ville'];

insertVille($nom);

header("Location: index.php");