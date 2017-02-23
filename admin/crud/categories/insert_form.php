<?php require_once '../../layout/header.php'; ?>

<h1>Ajout d'une nouvelle catégorie</h1>

<form action="insert_query.php" method="POST" enctype="multipart/form-data">
    <div>
        <label>Nom</label>
        <input type="text" name="nom_categorie" id="libelle">
        <label>Description</label>
        <textarea name="description"></textarea>
        <label>Image</label>
        <input type="file" name ="image">


    </div>
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>