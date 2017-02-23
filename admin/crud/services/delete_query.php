<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

deleteService($id);

header("Location: index.php");
