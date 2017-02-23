<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$categorie = getCategorie($id);

require_once '../../layout/header.php';
?>

<h1>Modification d'une catégorie</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div>
        <label>Nom</label>
        <input type="text" name="nom" value="<?php echo $categorie['nom']; ?>">
        <label>Description</label>
        <textarea name="description"><?php echo $categorie['description']; ?></textarea>
        <label>Image</label>
        <input type="file" name="image">
    </div>
    <input type="hidden" name="id" value="<?php echo $categorie['id']; ?>">
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>