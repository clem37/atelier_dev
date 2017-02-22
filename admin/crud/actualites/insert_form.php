<?php require_once '../../layout/header.php'; ?>

<h1>Ajout d'une nouvelle actualite</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="nom">Titre</label>
        <input type="text" name="titre" id="libelle">
        <label>Description Courte</label>
        <textarea name="description_courte"></textarea>
        <label>Description longue</label>
        <textarea name="description_longue"></textarea>
        <label>Image</label>
        <input type="file" name="image">
        <label>Date de création</label>
        <input type="datetime" name="date_creation">
        <label>Afficher</label>
        <input type="checkbox" name="afficher">
    </div>
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>