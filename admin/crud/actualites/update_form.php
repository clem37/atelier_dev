<?php
require_once '../../../model/database.php';



$id = $_GET['id'];
$actualite = getActualite($id);

require_once '../../layout/header.php';
?>
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<h1>Modification d'une actualité</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="nom">Titre</label>
        <input type="text" name="titre" id="nom" value="<?php echo $actualite['titre']; ?>">
        <label for="nom">Description Courte</label>
        <textarea name="description_courte"><?php echo $actualite['description_longue'];?></textarea>
        <label for="nom">Description Longue</label>
        <textarea name="description_longue"><?php echo $actualite['description_longue'];?></textarea>
        <label>Image</label>
        <input type="file" name="image">
        <label>Date de création</label>
        <input type="datetime" name="date_creation" value="<?php echo $actualite['date_creation_format'];?>">
        <label>Afficher</label>
        <input type="checkbox" name="afficher" value="<?php echo $actualite['afficher'];?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $actualite['id']; ?>">
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>