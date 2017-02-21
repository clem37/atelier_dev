<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

deleteEquipement($id);

header("Location: index.php");