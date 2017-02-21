<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom_equipement'];

insertEquipement($nom);

header("Location: index.php");