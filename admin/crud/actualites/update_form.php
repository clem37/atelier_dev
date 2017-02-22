<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$ville = getVille($id);

require_once '../../layout/header.php';
?>

<h1>Modification d'une catégorie</h1>

<form action="update_query.php" method="POST">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom_ville" id="nom" value="<?php echo $ville['nom']; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $ville['id']; ?>">
    <input type="submit">
</form>

<?php require_once '../../layout/footer.php'; ?>