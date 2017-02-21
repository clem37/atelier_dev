<?php
require_once __DIR__ . '/../../config/parameters.php';
require_once __DIR__ . '/../security.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administration</title>
        <link rel="stylesheet" href="<?php echo $siteurl; ?>admin/css/style.css"/>
        <link rel="stylesheet" type = text/css href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="layout/script.js" type="text/javascript"></script>
        
    </head>
    <body>

        <nav>
            <ul>
                <li><a href="<?php echo $siteurl; ?>admin/">Dashboard</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/utilisateur/">Utilisateurs</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/actualites/">Actualités</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/services/">Services</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/produits/">Produits</a></li>
                <li><a href="<?php echo $siteurl; ?>index.php">Front</a></li>
                <li><a href="<?php echo $siteurl; ?>logout.php">Logout</a></li>
            </ul>
        </nav>
        
        