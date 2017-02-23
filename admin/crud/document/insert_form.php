<?php require_once '../../layout/header.php'; ?>

<h1>Ajout d'un nouveau document</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom_document" id="libelle">
        <label for="nom">Fichier</label>
        <input type="file" name="fichier" id="libelle">


    </div>
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>