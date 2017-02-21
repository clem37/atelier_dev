<?php
require_once __DIR__ . '/../../config/parameters.php';
require_once __DIR__ . '/../security.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administration</title>
        <link rel="stylesheet" href="<?php echo $siteurl; ?>admin/css/style.css"/>
    </head>
    <body>

        <nav>
            <ul>
                <li><a href="<?php echo $siteurl; ?>admin/">Dashboard</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/ville/">Villes</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/equipement/">Equipements</a></li>
                <li><a href="<?php echo $siteurl; ?>index.php">Front</a></li>
                <li><a href="<?php echo $siteurl; ?>logout.php">Logout</a></li>
            </ul>
        </nav>