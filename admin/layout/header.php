<?php
require_once __DIR__ . '/../../config/parameters.php';
require_once __DIR__ . '/../security.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administration</title>
        <link rel="stylesheet" href="<?php echo $siteurl; ?>admin/css/style.css"/>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" type = text/css href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
        <script src="<?php echo $siteurl; ?>admin/layout/script.js" type="text/javascript"></script>

    </head>
    <body>

        <nav>
            <ul>
                <li><a href="<?php echo $siteurl; ?>admin/">Dashboard</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/utilisateur/">Utilisateurs</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/actualites/">Actualités</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/services/">Services</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/produits/">Produits</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/document/">Documents</a></li>
                <li><a href="<?php echo $siteurl; ?>admin/crud/categories/">Catégories</a></li>
                <li><a href="<?php echo $siteurl; ?>index.php">Front</a></li>
                <li><a href="<?php echo $siteurl; ?>logout.php">Logout</a></li>
            </ul>
        </nav>

